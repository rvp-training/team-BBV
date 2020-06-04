#!/usr/bin/env bash

curl -s http://localhost/api/db/create_tables/workspaces.php
curl -s http://localhost/api/db/create_tables/departments.php
curl -s http://localhost/api/db/create_tables/users.php
curl -s http://localhost/api/db/create_tables/posts.php
curl -s http://localhost/api/db/create_tables/comments.php
curl -s http://localhost/api/db/create_tables/images.php
curl -s http://localhost/api/db/create_tables/likes.php
curl -s http://localhost/api/db/data/workspaces.php
curl -s http://localhost/api/db/data/departments.php
curl -s http://localhost/api/db/data/users.php
