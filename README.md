## 湘大文库

[![Build Status](https://api.travis-ci.org/sky31/wenku.svg?branch=master)](https://travis-ci.org/sky31/wenky)

## 简介

### 需求和环境

#### 运行环境
* PHP 5.4+ (mcrypt, mbstring, openssl, tokenizer)
* Redis
* MySQL

#### 开发环境
* PHP 5.4+ (mcrypt, mbstring, openssl, tokenizer)
* Redis
* MySQL
* composer
* npm
* ruby-sass
* bower

### 安装部署
主要是通过`Make`脚本安装,windows请参照`Makefile`手动安装

#### 本地开发
```
# 会启动gulp watch进程
make develop
```

#### 生产环境
```
make production
```
