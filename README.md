# Learn-PHP


#learn git
To learn more about github [GitHub](http://jameswillweb.github.io/github-for-web-designers/reference.html)

###Push repository

```
git remote add origin remote [repository URL]
git push origin master
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