git study 1
1.�����汾��
  mkdir   �ļ�����   �����ļ���
  cd      �ƶ�
  pwd     ��ʾ��ǰĿ¼   
  
  
  git  init  ������ص�Ŀ¼���git ���Թ���Ĳֿ�
  ls   -ah   ��ʾ�����ص��ļ�
  
  
  git add readme.txt   ��Ӹı���ļ�
  git commit ���������ύ���θı䡡�����ļ��ύ���ֿ⡡�������������Ϊע��
  
  
  summary :
        ��ʼ��һ��GIT�ֿ⡡����git init
		����ļ���GIT�ֿ⡡����
		     1.git  add 
			 2.git commit
2.ʱ�⴩���
������git status �鿴��ǰ��״̬
������git diff �ļ� �鿴�ϴ��޸ĵ����ݡ�		
������summary: 
           git status  ��ʱ���չ�������״̬
		   git diff    ���Բ鿴���޸ĵ�����
��.�汾����
������git log��	       �鿴�汾����ʷ��¼
      git  �е�HEAD ��ʾ��ǰ�汾 Ҳ�������ύ
	  ��һ���汾Ϊ HEAD^ 
	  ���ϸ��汾   HEAD^^
	  ��100��        HEAD~100
	  
	  git reset  --hard HEAD^  �ص����ϸ��汾
	  ͨ��git log  ��ø����汾��Ϣ
	  ����ͨ��commit id �ص�δ���İ汾
	  git  reset --hard commit id
	  
	  
	  git reflog ������¼���ÿһ������
	  
	  summary:
	      HEAD  ָ��İ汾���ǵ�ǰ�汾
		  
		  GIT���������ڰ汾��ʷ֮�䴩��ʹ������
		  git reset --hard commit_id
		  ����ǰ git log �鿴�ύ��ʷ  ȷ�����˵��ĸ��汾
		  �ط�δ��  git reflog  �鿴��ʷ����
		  
		  
	  