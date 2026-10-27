## For captcha

public > fonts > arial > ARIAL.TTF is required

## Command to backup DB

"C:\Program Files\PostgreSQL\18\bin\pg_dump.exe" -h localhost -p 5435 -U postgres -d wbsports_db -F p -v -f "C:\Users\hp\Documents\wbsports_db_backup.sql"

## Command to restore DB

"C:\Program Files\PostgreSQL\18\bin\psql.exe" -h localhost -p 5435 -U postgres -d wbsports_restore_test -v ON_ERROR_STOP=1 -f "C:\Users\hp\Documents\wbsports_db_backup.sql"
