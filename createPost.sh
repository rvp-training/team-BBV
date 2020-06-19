#!/usr/bin/env bash
set -e
set -u
for ((i=0; i<9000; ++i))
do
  if [ $(($i%2)) -eq 0 ]; then
    curl http://localhost/api/createPost.php \
    -X POST \
    -H 'Content-Type:multipart/form-data' \
    -F 'image[]=@/home/ubuntu/team-BBV/test_images/screenshot.png' \
    -F 'image[]=@/home/ubuntu/team-BBV/test_images/screenshot2.png' \
    -F 'workspace=1' \
    -F 'title=System' \
    -F "text=hoge$i"
  else
     curl http://localhost/api/createPost.php \
    -X POST \
    -H 'Content-Type:multipart/form-data' \
    -F 'image[]=@/home/ubuntu/team-BBV/test_images/maru.jpg' \
    -F 'image[]=@/home/ubuntu/team-BBV/test_images/poko.jpg' \
    -F 'workspace=2' \
    -F 'title=Private' \
    -F "text=hoge$i"
  fi
done
docker container exec team-bbv_db_1 psql -U postgres -c 'SELECT COUNT(*) AS images FROM images;'
docker container exec team-bbv_db_1 psql -U postgres -c 'SELECT COUNT(*) AS posts FROM posts;'
docker container exec team-bbv_db_1 psql -U postgres -c 'UPDATE posts SET user_id=2;'
