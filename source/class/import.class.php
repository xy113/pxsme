<?php
class import
{
    var $current_file;
    /**
     * �滻ǰ��ǰ׺
     *
     * @access  private
     * @var     string      $source_prefix
     */
    var $source_prefix = 'sdw_';

    /**
     * �滻���ǰ׺
     *
     * @access  private
     * @var     string      $target_prefix
     */
    var $target_prefix = 'sdw_';
	/*****************
	* @�๹�캯��
	*****************/
    function import(){
	   $this->_connect();
	}
	/*****************
	* @�������ݿ�
	*****************/
	function _connect() {
		$this->target_prefix = $GLOBALS['config']['db']['tablepre'];
	}
    /**
     * ִ������SQL�ļ������е�SQL���
     *
     * @access  public
     * @param   array       $sql_files     �ļ�����·����ɵ�һά����
     * @return  boolean     ִ�гɹ�����true��ʧ�ܷ���false��
     */
    function run_all($sql_file){
	    if(!$sql_file)return false;
		$query_items = $this->parse_sql_file($sql_file);
		/* �������ʧ�ܣ������� */
		if (!$query_items){
			return false;
		}
		foreach ($query_items AS $query_item){
			/* �����ѯ��Ϊ�գ������� */
			if (!$query_item){
				continue;
			}
			if (!$GLOBALS['db']->query($query_item)){
				continue;
			}
		}
    }
    /**
     * �滻��ѯ�������ݱ��ǰ׺���÷���ֻ�����в�ѯ��Ч��CREATE TABLE,
     * DROP TABLE, ALTER TABLE, UPDATE, REPLACE INTO, INSERT INTO
     *
     * @access  public
     * @param   string      $sql        SQL��ѯ��
     * @return  string      �������滻��ǰ׺��SQL��ѯ����
     */
    function replace_prefix($sql)
    {
        $keywords = 'CREATE\s+TABLE(?:\s+IF\s+NOT\s+EXISTS)?|'
                  . 'DROP\s+TABLE(?:\s+IF\s+EXISTS)?|'
                  . 'ALTER\s+TABLE|'
                  . 'UPDATE|'
                  . 'REPLACE\s+INTO|'
                  . 'INSERT\s+INTO';

        $pattern = '/(' . $keywords . ')(\s*)`?' . $this->source_prefix . '(\w+)`?(\s*)/i';
        $replacement = '\1\2`' . $this->target_prefix . '\3`\4';
        $sql = preg_replace($pattern, $replacement, $sql);

        $pattern = '/(UPDATE.*?WHERE)(\s*)`?' . $this->source_prefix . '(\w+)`?(\s*\.)/i';
        $replacement = '\1\2`' . $this->target_prefix . '\3`\4';
        $sql = preg_replace($pattern, $replacement, $sql);

        return $sql;
    }

    /**
     * ����SQL��ѯ���е�ע�͡��÷���ֻ����SQL�ļ��ж�ռһ�л�һ�����Щע�͡�
     *
     * @access  public
     * @param   string      $sql        SQL��ѯ��
     * @return  string      �����ѹ��˵�ע�͵�SQL��ѯ����
     */
    function remove_comment($sql)
    {
        /* ɾ��SQL��ע�ͣ���ע�Ͳ�ƥ�任�з� */
        $sql = preg_replace('/^\s*(?:--|#).*/m', '', $sql);

        /* ɾ��SQL��ע�ͣ�ƥ�任�з�����Ϊ��̰��ƥ�� */
        //$sql = preg_replace('/^\s*\/\*(?:.|\n)*\*\//m', '', $sql);
        $sql = preg_replace('/^\s*\/\*.*?\*\//ms', '', $sql);

        return $sql;
    }
    /**
     * ��÷�ɢ�Ĳ�ѯ��
     *
     * @access  public
     * @param   string      $file_path      �ļ��ľ���·��
     * @return  mixed       �����ɹ����ط�ɢ�Ĳ�ѯ�����飬ʧ�ܷ���false��
     */
    function parse_sql_file($file_path)
    {
        /* ���SQL�ļ��������򷵻�false */
        if (!file_exists($file_path))
        {
            return false;
        }

        /* ��¼��ǰ�������е�SQL�ļ� */
        $this->current_file = $file_path;

        /* ��ȡSQL�ļ� */
        $sql = implode('', file($file_path));

        /* ɾ��SQLע�ͣ�����ִ�е���replace���������Բ���Ҫ���м�⡣��ͬ�� */
        $sql = $this->remove_comment($sql);

        /* ɾ��SQL����β�Ŀհ׷� */
        $sql = trim($sql);

        /* ���SQL�ļ���û�в�ѯ����򷵻�false */
        if (!$sql)
        {
            return false;
        }

        /* �滻��ǰ׺ */
        $sql = $this->replace_prefix($sql);

        /* ������ѯ�� */
        $sql = str_replace("\r", '', $sql);
        $query_items = explode(";\n", $sql);

        return $query_items;
    }
}
?>