Do not run this as a script. Run these commands. replace `<pid>` with the ID that the first command returns.
```
Get-Process -Id (Get-NetTCPConnection -LocalPort 6969).OwningProcess
taskkill /PID <PID> /F
```