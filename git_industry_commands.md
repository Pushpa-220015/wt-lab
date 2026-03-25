GIT CONFIGURATION COMMANDS
>>git config --global user.name
-- sets user name
>>git config --global email.name
-- sets email
>>git config --list
--shows all configuration
![alt text](<git configuration commands.png>)

2)REPOSITORY SERTUP COMMANDS
>>git init
--initializes git repo
>>git clone
--copies github repo to ur system
>>git clone --branch
--clone specific branch
>>git clone --depth
--shllow clone
![alt text](<repo setup commands-1.png>)
3)REPO STATUS 
>>git status
--shows modified files
>>git log
--shows commit history
>>git log --oneline
--short version of log
>>git log --graph
--shows branch graph
>>git show
--show changes before stagging
>>git diff
--shoes deatails of a commit
>>git diff
--shows changes before staggging
>.git blame
--shows who modified each line
>>git reflog
--shows reference history
>>git shortlog
--sows summary of commits
![alt text](<repo status.png>)
4)FILE TRACKING COMMANDS
>>GIT ADD.
-- adds all files
>>git add -p
--adds changes interactively
>>git restore
--discard chnages
>>git rm
--deletes file from repo
>>git mv
--rename file


5)COMMIT COMMANDS
>>git commit -m "message"
--commit with  message
>>git commit --amend
--edit last message
>>git commit --no-edit
--amend without editing message
![alt text](<commit commands.png>)

6)BRANCH MANAGEMENT COMMANDS
>>git branch
-- shows branches
>>git branch new_branch
--creates a new branch
>>git checkout branch_name
--switch to another brach
>>git merge branch_name
--merge another branch into current branch
![alt text](<branch commands.png>)

7)REMOTE REPOSITORY COMMANDS
>>git remote
-- shows the remote repository names connecyed to your local repo
>>git remote  -v
--shows remote URLs
>>git remote add
-- adds a new remote repository
>>git remote remove
--removes a remote connection
>>git fetch
--downloads latest changes from remote but does not merge
>>git fetch -all
--fetches from all remotes
>>git pull
--fetch + merge in one command
>>git pull --rebase
-- fecth+rebase instead of merge
>>git push
-- uploads local commits to remote repository
8)stash commands