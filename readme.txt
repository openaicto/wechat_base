git study 1
1.创建版本库
  mkdir   文件夹名   创建文件夹
  cd      移动
  pwd     显示当前目录   
  
  
  git  init  命令将本地的目录变成git 可以管理的仓库
  ls   -ah   显示被隐藏的文件
  
  
  git add readme.txt   添加改变的文件
  git commit －ｍ　　　提交本次改变　　将文件提交到仓库　　　　－ｍ后面为注释
  
  
  summary :
        初始化一个GIT仓库　　　git init
		添加文件到GIT仓库　　　
		     1.git  add 
			 2.git commit
2.时光穿梭机
　　　git status 查看当前的状态
　　　git diff 文件 查看上次修改的内容　		
　　　summary: 
           git status  随时掌握工作区的状态
		   git diff    可以查看被修改的内容
３.版本回退
　　　git log　	       查看版本的历史记录
      git  中的HEAD 表示当前版本 也是最新提交
	  上一个版本为 HEAD^ 
	  上上个版本   HEAD^^
	  上100个        HEAD~100
	  
	  git reset  --hard HEAD^  回到了上个版本
	  通过git log  获得各个版本信息
	  可以通过commit id 回到未来的版本
	  git  reset --hard commit id
	  
	  
	  git reflog 用来记录你的每一次命令
	  
	  summary:
	      HEAD  指向的版本就是当前版本
		  
		  GIT允许我们在版本历史之间穿梭，使用命令
		  git reset --hard commit_id
		  穿梭前 git log 查看提交历史  确定回退到哪个版本
		  重返未来  git reflog  查看历史命令
		  
		  
	  