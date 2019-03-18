# cloud-backup
Backup local files to an untrusted cloud storage, based on duplicity

## Installation

1. Install duplicity
2. Generate a GPG key to secure your backups. Make an independent backup of this key!
3. Make sure you can ssh into the cloud server where you want to keep your backups with the user 
   account you're using for the backups.
4. Create a ROOTDIR somewhere and then setup these files/directories:
```
ROOTDIR/
        cloud-backup/     Clone this repo into this folder
        backup.cfg        The config file for your backups
        backup.log        Logfile from your backups (created automatically on first run)
```

## backup.cfg
TODO: add documentation on backup.cfg file


