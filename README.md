# Unturned Convert Item Picture

## ปัญหา?

เนื่องจากเกม [Unturned](http://store.steampowered.com/app/304930/Unturned/) จะมีภาพของ item ต่างๆแยกมาให้ในตัวเกม ซึ่งผู้พัฒนาระบบสามารถนำไปใช้งานได้ แต่มีปัญหาว่าไฟล์ของภาพนั้นประกอบไปด้วยตัวเลข ซึงเป็น Item ID และชื่อของ Item นั้นๆอยู่ด้วยทำให้ยากแก่การทำมาใช้านตามปกติ

### ทางออก!

ใช้โปรแกรมของเราซิ! โปรแกรม PHP ที่จะช่วยให้คุณสามารถแปลงชื่อไฟล์รูปภาพของ Item ในเกม [Unturned](http://store.steampowered.com/app/304930/Unturned/) หลายๆไฟล์ให้เหลือเพียงแค่ตัวเลขเฉยๆได้ในครั้งเดียว
เพื่อสามารถนำภาพที่ได้ไปใช้ในการทำระบบอื่นต่อไปได้ง่ายขึ้น

### ตัวอย่าง

    Jeans_Work_2.png => 2.png
    
### โปรแกรมที่จำเป็น
     
* [Apache](https://httpd.apache.org/) หรือ Software อื่นๆที่สามารถรัน PHP ได้ ([AppServ](https://www.appserv.org/th/),[WampServer](http://www.wampserver.com/en/),[XAMPP](https://www.apachefriends.org/))
    
### วิธีใช้งาน

1. คัดลอกไฟล์ภาพจากตัวเกม [Unturned](http://store.steampowered.com/app/304930/Unturned/) (...\Unturned\Extras\Icons\*.png)
2. นำไปใส่ใว้ที่โฟเดอร์ Icons ในโปรแกรม (หรือตามแต่ที่ตั่งค่าใว้)
3. ทำการรันโปรแกรมด้วย [Apache](https://httpd.apache.org/) หรือ Software อื่นๆที่สามารถรัน PHP ได้
4. ไฟล์ที่ถูกแก้ใขชื่อแล้วจะอยู่ในโฟเดอร์ IconsNew ในโปรแกรม (หรือตามแต่ที่ตั่งค่าใว้)

### การตั่งค่า

ใน [index.php](./index.php)

~~~ php
// โฟเดอร์ตั้งต้นของไฟล์รูปภาพ
$dirInput = 'Icons';

// โฟเดอร์ขาออกของไฟล์รูปภาพที่ถูกเปลี่ยนชื่อแล้ว
$dirOutput = 'IconsNew';
~~~

### Cradit

* [GSV.IN.TH](http://gsv.in.th/) [(Art_Masster)](http://ddut.gsv.in.th/)
