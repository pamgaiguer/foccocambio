PS1="\u@\w> "
echo $SSH_TTY|egrep -q pts || reset
LIMIT=$(ulimit -u)
if [ $LIMIT != 20 ]
then
        ulimit -u 20 2>/dev/null
fi

