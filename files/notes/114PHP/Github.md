在github
1.開repository
![[Pasted image 20251002140146.png]]
2.抓repository(git clone....)
git clone https://github.com/Nekohip/shang_2025_10_02.git
git clone https://github.com/Nekohip/shang_2025_10_02.git hello(命名資料夾)
3.把本地資料放到repository(ctrl+a, ctrl+c, ctrl+v)
4.推上去雲端
	git add .
	git commit -m"init" (""裡是commit message)
	git push

git bash指令
shift+ins >>貼上
在檔案總管理右鍵能直接進資料夾，或是用cd /f/shang
ls >>所有資料夾
cd sh(輸入一半按tab) >>補齊檔名

設定username, email
git config --global user.name "John Doe"
git config --global user.email johndoe@example.com
第一次使用
git clone https://github.com/Nekohip/shang_2025_10_02.git

上傳檔案
git add . >>將檔案放到暫存區，準備新增到本地倉庫
git commit -m"init" >>將檔案新增到本地倉庫
git push >>提交到雲端

下載檔案
git clone https://github.com/Nekohip/shang_2025_10_02.git
老師的git
git clone https://github.com/chengkk0910/web2025-10-02.git
git clone https://github.com/chengkk0910/web2025-10-02.git kai_project

git pull >>下載更動過與新增的檔案

vscode檔案狀態
![[Pasted image 20251002160630.png]]