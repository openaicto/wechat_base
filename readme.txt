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
      -----	   