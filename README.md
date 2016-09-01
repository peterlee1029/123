###################
What is CodeIgniter
###################

CodeIgniter is an Application Development Framework - a toolkit - for people
who build web sites using PHP. Its goal is to enable you to develop projects
much faster than you could if you were writing code from scratch, by providing
a rich set of libraries for commonly needed tasks, as well as a simple
interface and logical structure to access these libraries. CodeIgniter lets
you creatively focus on your project by minimizing the amount of code needed
for a given task.

*******************
Release Information
*******************

This repo contains in-development code for future releases. To download the
latest stable release please visit the `CodeIgniter Downloads
<https://codeigniter.com/download>`_ page.

**************************
Changelog and New Features
**************************

You can find a list of all changes for each release in the `user
guide change log <https://github.com/bcit-ci/CodeIgniter/blob/develop/user_guide_src/source/changelog.rst>`_.

*******************
Server Requirements
*******************

PHP version 5.4 or newer is recommended.

It should work on 5.2.4 as well, but we strongly advise you NOT to run
such old versions of PHP, because of potential security and performance
issues, as well as missing features.

************
Installation
************

Please see the `installation section <https://codeigniter.com/user_guide/installation/index.html>`_
of the CodeIgniter User Guide.

*******
License
*******

Please see the `license
agreement <https://github.com/bcit-ci/CodeIgniter/blob/develop/user_guide_src/source/license.rst>`_.

*********
Resources
*********

-  `User Guide <https://codeigniter.com/docs>`_
-  `Language File Translations <https://github.com/bcit-ci/codeigniter3-translations>`_
-  `Community Forums <http://forum.codeigniter.com/>`_
-  `Community Wiki <https://github.com/bcit-ci/CodeIgniter/wiki>`_
-  `Community IRC <https://webchat.freenode.net/?channels=%23codeigniter>`_

Report security issues to our `Security Panel <mailto:security@codeigniter.com>`_
or via our `page on HackerOne <https://hackerone.com/codeigniter>`_, thank you.

***************
Acknowledgement
***************

The CodeIgniter team would like to thank EllisLab, all the contributors to the CodeIgniter project and you, the CodeIgniter user.
=======
## ���A���ݨD

- ��ĳ�ϥ�Apache 2.4.9 �ΥH�W������.
- ��ĳ�ϥ�PHP 5.3.3 �ΥH�W������.
- ��ĳ�ϥ�MySQL 5.1.67 �ΥH�W������.

Windows�t�Υi�H�����w��WAMPServer 2.5 �ΥH�W������.

## �w�ˤ覡

1. �U��git�Ȥ��http://msysgit.googlecode.com/files/Git-1.8.4-preview20130916.exe

2. ��http://mars.kh.usc.edu.tw:8000/ �� http://163.15.192.185:8000/ ���U�b��.

3. �n�J���Profile Settings �X> SSH Keys ���s�WSSH Key.
    - ���}Git Bash
    - ������a�ؿ��A�ëإ�.profile���[�WGIT_SSH="/usr/bin/ssh.exe"
        - cd
        - echo GIT_SSH="/usr/bin/ssh.exe" >> .profile
    - �إ�SSH KEY
        - mkdir .ssh
        - cd  ~/.ssh
        - ssh-keygen -t rsa -C "�A���H�c"
    - �L�Xid_rsa.pub�����e
        - cat id_rsa.pub
        
4. �s�W�ϥΪ�
    - ���}Git Bash ��J�H�U���O
    - git init
    - git config --global user.name "�ϥΪ̦W�r"
	- ex : git config --global user.name "peterlee1029"
    - git config --global user.email "�ϥΪ̫H�c"
	- ex : git config --global user.email "peterlee1029@gmail.com"
    - �ϥ�git config --list�h�T�{�{�b���ϥΪ�
        
5. �ϥ�Git Bash�N�{��clone�ܦ��A�����ڥؿ�(WAMPServer clone��\wamp\www).
    - ������(cd)�ؿ�����w�ؿ�
    - SSH�覡 : git clone git@mars.kh.usc.edu.tw:username/projectname.git CodeIgniter
	- ex : git clone git@mars.kh.usc.edu.tw:peterlee1029/IBM_CI-server.git CodeIgniter
    - HTTP�覡 : git clone http://mars.kh.usc.edu.tw:8000/shenglow/liugguiki.git CodeIgniter

6. �ϥ�case.sql(���\CodeIgniter\DB)�פJ��Ʈw.
	- case.sql���O�L�k���� 

7. �s�W��Ʈw�ϥΪ�
    - ���}http://localhost/phpmyadmin����
    - �I��u��C���y�ϥΪ̡z
    - �I��y�s�W�ϥΪ̡z
    - �b����ܡy�ϥΤ�r����z�ÿ�J�b��liugguiki
    - �D����ܡy�����z
    - �K�X��ܡy�ϥΤ�r����z�ÿ�J�K�Xliugguiki
    - �A����J�K�X
    - �I��̥k�U�誺�y����z
	- �s�W�@�Ӹ�Ʈw�W��
    - �^��y�ϥΪ̡z�����A����إߪ��ϥΪ̡A�I��y�s���v���z
    - ��y���w��Ʈw�v���z�X> �y�b�U�C��Ʈw�s�W�v���z�X> ��ܡy�s�W��Ʈw�W�١z
    - �Ŀ�y����z�ð���
	- ��ĳ�s�W��Ʈw�W�ٻP��ƪ�W�٬ۦP
	- �פJ��ƪ�e7822501�ܷs�W��Ʈw
	
8. �b��~�}�񪺪��A�U��CILog�i�H����
	- �}�� IBM_CI-server\application\config\config.php
	- ��� $config['base_url']	= 'http://localhost/IBM_CI-server/'
	- �ק� $config['base_url'] = '��~�}��IP'



## Server Requirements

-  Apache version 2.4.9 or newer is recommended.
-  PHP version 5.3.3 or newer is recommended.
-  MySQL version 5.1.67 or newer is recommended.

For Windows user can normally install WAMPServer version 2.5 or newer.

## Installation

1. Download git client at http://msysgit.googlecode.com/files/Git-1.8.4-preview20130916.exe

2. Register an account at http://mars.kh.usc.edu.tw:8000/ or http://163.15.192.185:8000/

3. Login and go to Profile Settings �X> SSH Keys add a new SSH Key.
    - Open Git Bash
    - change directory to home directory�Acreate a file name .profile and add GIT_SSH="/usr/bin/ssh.exe" in the file.
        - cd
        - echo GIT_SSH="/usr/bin/ssh.exe" >> .profile
    - Create a SSH KEY
        - mkdir .ssh
        - cd  ~/.ssh
        - ssh-keygen -t rsa -C "your_Email"
    - print content of id_rsa.pub
        - cat id_rsa.pub

4. Add new user
    - Open Git Bash and run the following command
    - git init
    - git config --global user.name "User's name"
	- ex : git config --global user.name "peterlee1029"
    - git config --global user.email "User's email"
	- ex : git config --global user.email "peterlee1029@gmail.com"
    - Use git config --list to check who is the login user 

5. Using git client to clone project to your web server root directory(WAMPServer clone to \wamp\www).
    - change directory(cd) to target directory
    - Using SSH : git clone git@mars.kh.usc.edu.tw:username/projectname.git CodeIgniter
	- ex : git clone git@mars.kh.usc.edu.tw:peterlee1029/IBM_CI-server.git CodeIgniter
    - Using HTTP : git clone http://mars.kh.usc.edu.tw:8000/shenglow/liugguiki.git CodeIgniter

6. Using case.sql(exist in \CodeIgniter\DB) to Import database.

