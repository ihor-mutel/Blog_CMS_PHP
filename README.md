# Learn-PHP


#learn git
To learn more about github [GitHub](http://jameswillweb.github.io/github-for-web-designers/reference.html)

PHP Learning guide [PHP](https://drive.google.com/folderview?id=0B4VMIiiLs8e7RzRELXNLQjh0ZWc&usp=sharing)

###Start lampp linux
cd /opt/lampp
sudo ./lampp start


###Brackets localhost
```
http://localhost/demo/Learn-PHP/
```

###Push repository

```
git remote add origin remote [repository URL]
git push origin master
```
Force push
```
git push -f origin <branch>
```

Push current branch to remote repository
```
git push
```

Push new branch to the repository

```
git push -u origin [Branch name]
```

###Clone repository
```
git clone [url]
```
###Update local branch

Will fetch from the remote repository tracked to the current branch.
```
git fetch
```
###Pull 
This has the effect of automatically updating the local repository to match the remote, while fetch will download the files but not update your local copies.

```
git pull
```
###Delete commit
```
git reset --hard HEAD~1
```
Empty message
```
git commit -a --allow-empty-message -m ''
```

###Branch

Creates a new branch with the specified name.
```
git branch <name>
```

Displays a list of existing branches and indicates the current branch.
```
git branch
```

Creates a new branch with the specified name and checks it out so that it is the current branch.
```
git checkout -b <name>
```
