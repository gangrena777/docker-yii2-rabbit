

# docker-compose up -d
# import yii2base.sql  in a base
# put in computer local  host  file     <ip-adress> yii2.loc 
     # EXAMPLE  192.168.1.5  yii2.loc
     # to know  ip ->  run  ipconfig  in cmd
# dont forget update composer
     # cd sites/basic
     # composer update     

     #run rabbit in console
     in basic  - docker-compose exec php
     php yii send-msg/publish
     php yii rabbit/consume  consumer-name
# dont forget run consumer     

 

