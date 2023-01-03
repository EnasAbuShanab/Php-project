# Php-project
## isset()
- هذه الدالة وظيفتها التأكد من وجود عنصر  
- نبدأ العمل بوضع الدالة form خارج php
- يوضع العنصر المراد التأكد منه في الأقواس داخلها
- لتظر المُحتويات المُدخله في الرابط أعلى الصفحة في الأمر الأول أو لا تظهر في الأمر الثاني كما الصورة  المُرفقة تباعاً
- من المهم ترتيب الأوامر أثناء كتابة الكود حتى تتنفذ بالترتيب الصحيح
- الأمر () isset يعني أنه في حال تنفيذ الأ مر الموجود داخل الأقواس فنفذ الأمر الذي يليه

## GET  
![Get](img/get.PNG)

## POST
![Post](img/Post.PNG)

--------------------------------------
## How I build the register?
- أخدنا الفورم منBootdey 
- فصلت ال CSS code بفايل منفصل و الربط بينهم من خلال 
![Get](img/CSS.PNG)
بعد head مباشرة
- إضافة method="post" لتحديد طبيعة الفورم
![Post](img/method.PNG)
- تعديل محتويات Input داخل الكود حسب الفورم المرغوب
- إضافة كود php و ربطه مع ال database مع اجراء التعديلات المطلوبة
![Post](img/php.PNG)

--------------------
## How to build LOGIN form?




------------------------

# if else statements
- == Equal
- === Identical
- != not Equal
- <> not Equal
- !== not Identical
- <=> this sign results (-1,0,1) where if < is true then the resule = 1 , if it's = then it's = 0, and if it's > then it's = -1

## Merge elements
- include
- require
- include_once
- require_once

الفرق بين العنصرين هو أنه فيحال حدوث خطأ ضمن include فإنه يُظهر الخطأ دون حدوث مشاكل بباقي الكود, 

أما requir فالخطأ داخلها يتسبب بتعطل كامل الموقع
