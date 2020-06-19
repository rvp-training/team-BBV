#!/usr/bin/env bash
set -e
set -u
for ((i=0; i<10; ++i))
do
    curl http://localhost/api/createPost.php \
    -X POST \
    -H 'Content-Type:multipart/form-data' \
    -F 'image[]=@/home/ubuntu/team-BBV/screenshot.png' \
    -F 'workspace=1' \
    -F 'title=Title' \
    -F "text=hoge$i"
done
docker container exec team-bbv_db_1 psql -U postgres -c 'SELECT COUNT(*) AS images FROM images;'
docker container exec team-bbv_db_1 psql -U postgres -c 'SELECT COUNT(*) AS posts FROM posts;'
docker container exec team-bbv_db_1 psql -U postgres -c 'UPDATE posts SET user_id=2;'
