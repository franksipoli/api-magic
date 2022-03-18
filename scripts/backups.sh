#!/bin/bash
mysqldump --host=172.19.0.2 --user=laravel --password='bl4bl4@l3mbr4' --databases laravel -d > bd_stru_laravel.sql
mysqldump --host=172.19.0.2 --user=laravel --password='bl4bl4@l3mbr4' --databases laravel -c -t -e > bd_dados_laravel.sql

