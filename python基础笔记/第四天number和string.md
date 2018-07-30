# 第四天

## 1.Number

### 1.1 Number数据类型

~~~
python3：
   支持：
      int(长整形)
      float(浮点型)
      bool(布尔类型)
      complex（复数）
在python3中只有一种整数类型int,表示长整形，没有python2中的long



#使用内置函数type（）:可以判断数据的类型
# a,b,c,d = 20,5.5,True,4+3j
a = 20
b = 5.5
c = True
d = 4+3j
print(type(a))
print(type(b))
print(type(c))
print(type(d))

"""
<class 'int'>
<class 'float'>
<class 'bool'>
<class 'complex'>
"""


# isinstance()#返回的结果为Boolean，参数1：需要判断的数据，参数2：需要判断的类型
ss = 11
print(isinstance(ss,int))

#思考：他们之间的区别？
# type()不会认为子类是一种父类类型
# isinstance()会认为子类是一种父类类型

"""
案例“
   整数  浮点   复数
"""
"""
整数：python可以处理任意大小的整数（包括负整数），在程序中表示和数学中一样
"""
num1 = 10
num2 = num1

#id():地址----》手机号，门牌号
print(id(num1))
print(id(num2))
print(num1)
print(num2)


#连续的定义多个变量
num3 = num4 = num5 = 1
# print(num3)
# print(num4)
# print(num5)
print(num3,num4,num5)

# a = 2,b = 4


#交互是赋值定义变量
num6,num7 = 6,7
print(num6,num7)




"""
浮点：浮点数由整数部分和小数部分组成
"""
f1 = 1.1
f2 = 2.2
f3 = f1 + f2
print(f3)

"""
复数：
   实数部分和虚数部分
   其中在工程上以j表示虚数，科学上一般用i
"""
d = 4 + 3j

aa = 123-12j
"""
real：获取实数
imag:获取虚数

返回的数据类型是浮点
"""
print(aa.real)	
print(aa.imag)

"""
布尔值：一个布尔值只有两个：True False

"""
b1 = True
b2 = False
print(b1,b2)

"""
空值：None
是python中一个特殊的值，用None表示，不能理解None为0，因为0是有意义

"""
n = None
print(n)
print(type(n))
~~~

### 1.2 常用的数据类型之间的转换

~~~2
函数            说明
int(x)       将x转换为一个整数
str(x)      将对象x转换为字符串
float(x)    将x转换为一个浮点数
complex(x)   将x转换为复数
repr(x)    	将对象x转换为表达式字符串
list(x)    将序列x转换为列表	
tuple(x)    将序列x转换为元祖
chr(x)    将一个整数转换为一个字符
unichr(x)   将一个整数转换为一个unicode字符
hex(x)    将整数转换为一个十六进制的字符串
oct(x)   将整数转换为一个八进制的字符串
 


a = "100"#此时a属于字符串，里面存放的是100三个字符
b = int(a)

print(type(b))
print("b = %d"%b)



"""
类型的转换
"""
print(int(1.9))#取整
print(float(1))
print(int("123"))
print(float("12"))
#如果有其他无用的字符会报错
# print(int("abc"))#报错
# print(int("123abc"))#报错

print(int("+123"))
print(int(12+3))
# print(int("12+3"))
print(int("-123"))
print(int("12-3"))




~~~

### 1.3 常用的Number数据模块

#### 1.3.1 math

~~~
如何查看math模块中方法函数
1.直接查询api
2.dir()对应的模块

import math

print(dir(math))


#数学功能
#返回数字的绝对值  abs()

a1 = -10
a2 = abs(a1)
print(a2)

#比较两个数的大小

a3 = 100
a4 = 9
print((a3>a4)-(a3<a4))#True表示1   False：0

#返回给定函数的最大值max()
print(max(1,2,3,4,5,67,9))

#返回给定函数的最小值min()
print(min(1,2,3,4,5,67,9))

#求x的y次方  pow()

print(pow(2,5))


#返回的浮点数，四舍五入,参数1：表示具体的浮点数，参数2：表示舍入到小数点后n位
print(round(3.456))
print(round(3.567))	
print(round(3.456,2))
print(round(3.546,1))


#向上取整ceil()
print(math.ceil(18.1))
print(math.ceil(18.9))


#向下取整floor()
print(math.floor(18.1))
print(math.floor(18.9))
print(math.floor(18.0))

#返回小数部分和整数部分（modf()）,元祖
print(math.modf(22.3))

#开方,返回的是浮点数
print(math.sqrt(25))
~~~

#### 1.3.2 random

~~~


import random
# print(random.randrange(1,100,2))

#random
"""
随机生成一个0~1之间的浮点数
"""
print(random.random())
"""
4.shuffle
将列表或者序列中元素进行随机排序

"""
list = [1,2,3,4,20,99,33]
print(list)
random.shuffle(list)
print(list)

"""
uniform():
将随机生成一个实数，它在(x,y)范围内，返回浮点数
格式：
   random.uniform(x,y)
   x:随机数的最小值，包含该含
   y：随机数的最大值，不包含
"""
print(random.uniform(5,10))
~~~

## 2.字符串（string）

### 2.1 字符串的介绍

~~~

~~~

### 2.2 python中字符串的格式

~~~

#定义一个变量a,存储的是数字类型的值
a = 100
print(id(a))
a = 200
print(id(a))
#b存储的是字符串
b = "hello world"
c = 'hello world'
"""
总结：
   双引号或单引号中的数据-----》字符串
特点：
   字符串不可变
"""
~~~

### 2.3 字符串的输出

~~~
name = "xiaoming"
position = "北京"
age = 18

print("姓名：%s"%name)
print("年龄：%d"%age)
print("位置：%s"%position)
~~~

### 2.4 字符串的输入

~~~
之前学习input（）,通过它来完成从键盘获取数据，存放到一个变量中
注意：
   input()获取的数据-----》string


userName = input("请输入用户名：")
passwd = input("请输入您的密码：")
print("用户名为：%s,密码：%s"%(userName,passwd))
~~~

### 2.5 下标和切片 

#### 2.5.1 下标

~~~
下标的定义：
     编号，索引

字符串中下标的使用：
    列表和元祖等支持下标索引
    name = "xiaoming" 
    
    

name = "abcdef"

# for i in name:
#     print(i)

"""
注意：
   下标的起始位置0
   在内存中存储的位置
   a          b       c       d        e      f
   name[0] name[1] name[2] name[3] name[4] name[5]
"""
print(name[0])	
print(name[1])
print(name[2])
print(name[3])
print(name[4])
~~~

#### 2.5.2 切片

~~~
定义：
   切片指对操作对象截取一部分的操作，字符串，列表，元祖都支持切片操作
   
切片格式：
    [开始:结束:步长]
注意：
   选取的区间属于左闭右开型，从开始的位置开始，到结束的前一位结束



name = "abcdef"
print(name[0:5])#下标0，1，2，3，4
print(name[3:5])#3，4
print(name[2:])#
print(name[1:-1])	


#扩展
a = "abcdef"
print(a[:3])
print(a[::2])
print(a[5:1:2])#
print(a[1:5:2])
print(a[::-2])
print(a[5:1:-2])
~~~

### 2.6 字符串中的常见运算

~~~

#1.字符串的连接
str1 = "hello "
str2 = "python"
str3 = str1 + str2
print(str3)
#重复输出字符串
str4 = ">^< "
str5 = str4*10
print(str5)

#3.访问字符串中的某一个字符
str6 = "hello python"
print(str6[1])
# str6[1] = "qq"#字符串不可变
# print(str6[1])


#截取字符串中的一部分
str7 = "hello python"
print(str7[6:])
~~~

### 2.7 转义字符

~~~
定义：
   将一些普通的字符转换为特殊的字符
   
格式：
  \
  


#\n   换行
num = 1
str = "1234"
print("num = %d\n str = %s \n haha"%(num,str))

#\\
print("\\")

#' "

print("\"")

print("good\nnice")
#\t制表符   空格
print("good\tnice")

#如果字符串有好多字符需要转义就需要加入很多”\“
print("\\t\\")
print("\\\t\\")

"""
C:\\Python34\\Lib\\asyncio\\__pycache__
"""
#为了简化，python允许使用r表示内部的字符

print("C:\\Python34\\Lib\\asyncio\\__pycache__")
print(r"C:\Python34\Lib\asyncio\__pycache__")
~~~

### 2.8 字符串中的常见操作

~~~
定义一个字符串 myStr = "hello world"
~~~

#### 2.8.1 find

~~~
定义：
    检测str是否包含在myStr中，如果是返回值为开始的索引，否则返回-1
格式：
   myStr.find(str,start=0,end=len(myStr))

"""
find:
定义：
    检测str是否包含在myStr中，如果是返回值为开始的索引，否则返回-1
格式：
   myStr.find(str,start=0,end=len(myStr)),start和end如果不写表示从开始位置到结束的位置
"""
myStr = "hello world"
# print(len(myStr))
aa = myStr.find("hello")
print(aa)
bb = myStr.find("qq")
print(bb)

~~~

#### 2.8.2 index

~~~
"""
定义：
    跟find方法一样,如果找到返回开始索引，如果找不到直接报错valueError

格式：
   myStr.index(str,start,end)
"""
# myStr = "hello world"
# aa = myStr.index("hello")
# print(aa)
# bb = myStr.index("qq")
# print(bb)
~~~

#### 2.8.3 count

~~~
count:
次数：
定义：
   返回str在start和end之间 在myStr里面出现的次数
格式：
  myStr.count(str,start,end)

"""
myStr = "hello world"
aa = myStr.count("l",1,5)
print(aa)
~~~

#### 2.8.4  replace

~~~
"""
replace:
定义：
  把myStr中的str1替换成str2，
格式：
   myStr.replace(str1,str2,count)

"""

myStr = "hello world"
aa = myStr.replace("l","qq",1)
print(aa)
~~~

#### 2.8.5 split

~~~
"""
split:
定义：
   以str为分隔符对myStr进行切片，maxsplit表示最大的切几次，如果没有赋值，表示从头到位一直切。
返回的是由str左右两侧的字符串组成的列表。
格式：
   myStr.split(str="",maxsplit)
   

"""
myStr = "aa bb hello world"
aa = myStr.split(" ",2)
print(aa)

~~~

#### 2.8.6 capitalize

~~~

"""
capitalize:
定义：
   把字符串的第一个字符大写
   
格式：
myStr.capitalize()
"""

myStr = "hello world"
aa = myStr.capitalize()
print(aa)
~~~

#### 2.8.7 title

~~~
"""
title:
   把字符串中的每个单词首字母大写

格式：
   mystr.title()
"""
myStr = "aa bb cc haha"
aa = myStr.title()
print(aa)
~~~

#### 2.8.8 swapcase

~~~
"""
swapcase:
定义：
   转换字符串中的小写为大写，大写为小写（大小写互换）
格式：
 swapcase（）   

"""
myStr = "HHHHwwwwHaHaHeiHei"
aa = myStr.swapcase()
print(aa)
~~~

#### 2.8.9 startswith

~~~
"""
startswith:
定义：
    检查字符串是否以obj开头，是返回True  反之false
    
格式：
   myStr.Startswith(obj)

"""
myStr = "aa hello world"
aa = myStr.startswith("bb")
print(aa)
~~~

#### 2.8.10 endswith

~~~
"""
endswith
定义：
   检查字符串是否以obj结尾，是返回True  反之false
格式：
   myStr.endswith(obj)
"""
myStr= "hello world"
aa = myStr.endswith("world1")
print(aa)
~~~

#### 2.8.11 lower

~~~
"""
lower:
定义：
转换字符串中所有大写字符为小写
格式：
 mystr.lower()

"""
myStr = "hello world PYTHON"
aa = myStr.lower()
print(aa)
~~~

#### 2.8.12 upper

~~~
"""
upper:
定义：
转换字符串中所有小写字符为大写
格式：
 mystr.upper()

"""
myStr = "hello world PYTHON"
aa = myStr.upper()
print(aa)
~~~

#### 2.8.13 ljust

~~~
"""
ljust:
left
定义：
    返回一个原字符串左对齐，并使用空格填充至长度width的新的字符
格式：
   myStr.ljust(width)
"""
myStr = "hello world"
aa = myStr.ljust(20)
print(aa)
~~~

#### 2.8.14 rjust

~~~
"""
rjust:
right
定义：
    返回一个原字符串右对齐，并使用空格填充至长度width的新的字符
格式：
   myStr.rjust(width)
"""
myStr = "hello world"
aa = myStr.rjust(20)
print(aa)
~~~

#### 2.8.15 center

~~~
"""
center:
定义：
返回一个原有字符串居中，并使用空格填充至长度width的新的字符
格式：
   myStr.center(width)
"""
myStr = "hello"
aa = myStr.center(20)
print(aa)
~~~

#### 2.8.16 zfill

~~~
"""
zfill
定义：
    返回一个长度为width的字符串，原为字符串右对齐，前面补0
格式：
zfill(width):
width:为字符串的宽度
"""
myStr = "hello world"
aa = myStr.zfill(20)
print(aa)
~~~

#### 2.8.17 lstrip

~~~

"""
lstrip
定义：
    如果字符串以空格开头（左侧），lstrip可以将字符串开头的空格删除。
格式：
   myStr.lstrip()
"""
myStr = "     hello"
aa = myStr.lstrip()
print(aa)	
~~~

#### 2.8.18 rstrip

~~~
"""
rstrip
定义：
    如果字符串以空格结尾（右侧），lstrip可以将字符串结尾的空格删除。
格式：
   myStr.strip()
"""
myStr = "     hello      "
aa = myStr.rstrip()
print(aa)
~~~

#### 2.8.19 strip

~~~
"""
strip
定义：
    删除myStr两端的空白字符
格式：
   myStr.strip()
"""
myStr = "     hello      "
aa = myStr.strip()
print(aa)
~~~

#### 2.8.20 rfind

~~~
"""
rfind:
定义：
   类似find函数，从右边开始查找，返回的是第一个字符的开始索引，
反之返回-1
"""
myStr = "hello world"
aa = myStr.rfind("w")
print(aa)
~~~

#### 2.8.21 rindex

~~~
"""
定义：
    跟find方法一样,从右边开始，如果找到返回开始索引，如果找不到直接报错valueError

格式：
   myStr.rindex(str,start,end)
"""
# myStr = "hello world"
# aa = myStr.rindex("hello")
# print(aa)
# bb = myStr.rindex("qq")
# print(bb)
~~~

#### 2.8.22 partition

~~~
"""
partition:
定义：
    把myStr以str分割三部分，str前   str   str后
    注意：
       如果分割的字符串，的字符前后没有会使用空字符串代替
 格式：
    myStr.partition(str)   
"""
myStr = "hello world python"
aa = myStr.partition("hello")
print(aa)
~~~

#### 2.8.23 rpartition

~~~
"""
rpartition:
定义：
    从右向左，把myStr以str分割三部分，str前   str   str后
    注意：
       如果分割的字符串，的字符前后没有会使用空字符串代替
 格式：
    myStr.rpartition(str)   
"""
myStr = "hello world python"
aa = myStr.rpartition("hello")
print(aa)
~~~

#### 2.8.24 splitlines

~~~
"""
splitlines:
定义：
    按照行进行分割，返回一个包含各个行作为元素的列表

格式：
   myStr.splitlines()
"""
myStr = "hello\nworld\npython"
aa = myStr.splitlines()
print(aa)
~~~

#### 2.8.25 isalpha

~~~
"""
isalpha
定义：
   如果myStr中所有的字符都是字母，返回True，反之False
   
"""
myStr = "abc1"
aa = myStr.isalpha()
print(aa)
~~~

#### 2.8.26 isdigit

~~~
"""
isdigit:
判断字符串中是否只包含数字，如果返回True，反之返回false

"""
myStr = "111234"
aa = myStr.isdigit()
print(aa)
~~~

#### 2.8.27 isalnum

~~~
"""
isalnum
定义：
   如果Mystr所有的字符都是字母或者数字返回True，否则返回False

"""
myStr = "abc132"
aa = myStr.isalnum()
print(aa)
~~~

#### 2.8.28 isspace

~~~
"""
isspace
定义：
   如果myStr中只包含空格，返回True，反之False

"""
myStr = ""
aa = myStr.isspace()
print(aa)
~~~

#### 2.8.29 join

~~~
"""
join
定义：
   myStr中每一个字符后面插入str,构造出开一个新的字符串（不包含最后一个）
   格式：
   myStr.join（）
"""
myStr = ","
list = ["my","name","is","xiaoming"]
print(myStr.join(list))
~~~

#### 2.8.30 eval

~~~
"""
eval
定义：
   将字符串str当成有效的表达式来求值，将结果返回给我们
格式：
eval(str)   
"""
num1 = eval("123")
print(num1)
print(type(num1))
print(eval("-123"))
print(eval("123"))
print(eval("12+3"))
# print(eval("a123"))报错
# 
# print(eval("1a23"))报错
~~~

### 2.8.31 chr

~~~


"""
chr
   ASCII

0---》48
A---->65
a----->97

chr(0~255)
"""
print(chr(65))
print(chr(67))
print(chr(97))
print(chr(52))



~~~

#### 2.8.32 unichr

~~~
看unicode
~~~

#### 2.8.33 ord









































