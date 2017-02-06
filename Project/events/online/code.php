<?php session_start();?>
<html>
<head><title>Code Masters</title>
<script type="text/javascript" src="http://ajax.googleapis.com/ajax/libs/jquery/1.4.2/jquery.min.js"></script>
<style type="text/css"> 
div.panel,p.flip
{
margin:0px;
padding:5px;
text-align:center;
background: #007f7f;
border:solid 1px #c3c3c3;
}
#q1,#q2,#q3,#q4,#q5,#q6,#q7,#q8,#q9,#q10,#q11,#q12,#q13,#q14,#q15,#q16,#q17,#q18,#q19,#q20,#q21,#q22,#q23,#q24,#q25,#q26,#q27,#q28,#q29,#q30
{
height:350px;
display:none;
font-size:20px;
}
</style>
<script type="text/javascript"> 
//question toggler
var bef=0;
function toggler(x)
{	
$(document).ready(function(){
    $("#q"+x).slideToggle("slow");
  if((bef!=0)&&(x!=bef)){  $("#q"+bef).slideToggle("slow");}
   if(bef!=x){ bef=x;} else bef=0;
});}
</script>
<script type="text/javascript">
//countdown timer
var dhr=1,dmin=1,dsc=1;
window.onload=tick;
function tick()   {
    if(dhr!=-1)
    {
	if(dsc==0)
	{dsc=60;--dmin;}
	if(dmin==-1)
	{dmin=59;--dhr;}
		--dsc;}
	if((dhr==0)&&(dmin==5)&&(dsc==0))
	{alert("5 Minutes Left, Please Submit Now");}
    if(dhr==-1)
		{dhr=0;dmin=0;dsc=0;alert("Time Over");redirect();return false;}
	var table=document.getElementById("clock");
	var row1=table.rows[0];
	row1.cells[0].innerHTML=dhr;
	row1.cells[2].innerHTML=dmin;
	row1.cells[4].innerHTML=dsc;
setTimeout("tick();",1000);
}
</script>
<script type="text/javascript">
function redirect()
{ var brws=navigator.appName;
var tmp=0;var result="";var x;alert(brws);
for(var i=1;i<=30;++i)
{
x=document.getElementsByName("q"+i);tmp=0;
if(brws.charAt(0)=='N'){
for(var j=0;j<=3;++j)
	{
		if(x[j].checked){tmp=x[j].value;}
	}}
else{
for(var j=1;j<=4;++j)
	{
		if(x[j].checked){tmp=x[j].value;}
	}}
result+=tmp+",";
}
alert(result);
$.post("storeresult.php",{ ans:result },function(data) {
var todo=data.split(".");alert(todo[0]); 
if(todo[0].charAt(0)=='A'){window.location.href="../login.php";}
else if(todo[0].charAt(0)=='R'){window.location.href="../../index.php";}
});
}
</script>
</head>
<body style="background-image:url('../../masterpagephotos/woven.jpg'); margin:0px;  background-repeat:repeat;">
<div id="page" align="center" style="width:900px;color:#ffffff; background-color:#000000;margin:auto; padding:20px;">
<h3>The following programs are tested on TURBO C++.<br>
Assume all the libraries have been included.</h3>
<table border=1px; cellpadding="5px" id="clock" style="color:#ffffff;  font-size:20px; text-align:center; font-family: Verdana; vertical-align:middle;">
<tr><td></td><td style="text-decoration:blink;">:</td><td></td><td style="text-decoration:blink;">:</td><td></td></tr>
<tr style="font-style:italic; font-size:17px;"><td>Hrs</td><td>,</td><td>Mins</td><td>,</td><td>Secs</td></tr>
<tr><td style="font-size:15px;" colspan="5">Time Left</td></tr>
</table><br>
<p class="flip" onClick="toggler('1')" >Question 1</p>
<div class="panel" id="q1">
<pre>void main() {
int i=0;
for(i=0;i&lt;20;i++) 
{  switch(i) {
case 0:i+=5; case 1:i+=2; case 5:i+=5; default i+=4; break;} 
printf("%d,",i); }} </pre><br>
<input name="q1" value="1" type="radio">a) 0,5,9,13,17<br>
<input name="q1" value="2" type="radio">b) 5,9,13,17<br>
<input name="q1" value="3" type="radio">c) 5,10,15,20<br>
<input name="q1" value="4" type="radio">d) 16,21<br>
</div>
<p class="flip" onClick="toggler('2')">Question 2</p>
<div class="panel" id="q2">
<pre>What is the output in the following program?
main() 
{char c=-64; int i=-32; unsigned int u =-16; 
if(c&gt;i) 
{printf("pass1,"); 
if(c&lt;u) printf("pass2"); 
else printf("Fail2"); } 
else printf("Fail1); 
if(i&lt;u) printf("pass2"); 
else printf("Fail2") }</pre>
<input name="q2" type="radio" value="1">a) Pass1,Pass2<br>
<input name="q2" type="radio" value="2">b) Pass1,Fail2<br>
<input name="q2" type="radio" value="3">c) Pass1,Fail2<br>
<input name="q2" type="radio" value="4">d) None of these<br>
</div>
<p class="flip" onClick="toggler('3')">Question 3</p>
<div class="panel" id="q3">
<pre>What will be the result of the following program?
char *gxxx() {static char xxx[1024]; return xxx; }
main() 
{char *g="string";
strcpy(gxxx(),g); g = gxxx(); strcpy(g,"oldstring");
printf("The string is : %s",gxxx()); }
</pre>
<input name="q3" type="radio" value="1">a) The string is : string<br>
<input name="q3" type="radio" value="2">b) The string is :Oldstring<br>
<input name="q3" type="radio" value="3">c) Run time error/Core dump<br>
<input name="q3" type="radio" value="4"> d) Syntax error during compilation<br>
</div>
<p class="flip" onClick="toggler('4')">Question 4</p>
<div class="panel" id="q4">
<pre>What will be the result of the following program?
main(){char p[]="String"; int x=0;
if(p=="String") 
{printf("Pass 1"); 
if(p[sizeof(p)-2]=='g') 
printf("Pass 2"); 
else printf("Fail 2"); } 
else	{ printf("Fail 1"); 
if(p[sizeof(p)-2]=='g') 	printf("Pass 2"); 
else printf("Fail 2"); } }</pre>
<input name="q4" type="radio" value="1">a)Pass 1, Pass 2<br>
<input name="q4" type="radio" value="2">b) Fail 1, Fail 2<br>
<input name="q4" type="radio" value="3">c) Pass 1, Fail 2<br>
<input name="q4" type="radio" value="4">d) Fail 1, Pass 2<br>
</div>
<p class="flip" onClick="toggler('5')">Question 5</p>
<div class="panel" id="q5">
<pre> Which of the choices is true for the mentioned declaration?
const char *p;
and
char * const p;
</pre>
<input name="q5" type="radio" value="1">a)You can't change the character in both <br>
<input name="q5" type="radio" value="2">b) First : You can't change the character,<br> Second : You can;t change the pointer<br>
<input name="q5" type="radio" value="3">c) You can't change the pointer in both<br>
<input name="q5" type="radio" value="4">d) First : You can't change the pointer,<br> Second : You can't chanage the character<br>
</div>
<p class="flip" onClick="toggler('6')">Question 6</p>
<div class="panel" id="q6">
<pre>What is the output of program?
main(){
printf("R\n\ta\nn\n\tj\na\n\tn\na");}
</pre>
<input name="q6" type="radio" value="1">1. Error<br>
<input name="q6" type="radio" value="2">2. Rntannntjnantnna<br>
<input name="q6" type="radio" value="3">3. R<br>
   a<br>
   n j<br>
   a<br>
   n<br>
   a<br>
<input name="q6" type="radio" value="4">4. none
</div>
<p class="flip" onClick="toggler('7')">Question 7</p>
<div class="panel" id="q7">
<pre>What is the output of this program?
main()
{
int a=-3;a=-a-a+a;printf("%d",a);
}
</pre>
<input name="q7" type="radio" value="1">1. error<br>
<input name="q7" type="radio" value="2">2. compilation failed<br>
<input name="q7" type="radio" value="3">3. 3<br>
<input name="q7" type="radio" value="4">4. none<br>
</div>
<p class="flip" onClick="toggler('8')">Question 8</p>
<div class="panel" id="q8">
<pre>What will be the output?<br>main(){
int a=10;int b=5;int c=5;int d=2;
int e=--(a*(d))+(b)/c;printf("e=%d",e);}
</pre>
<input name="q8" type="radio" value="1">1. error<br>
<input name="q8" type="radio" value="2">2. 4<br>
<input name="q8" type="radio" value="3">3. 20<br>
<input name="q8" type="radio" value="4">4. none<br>
</div>
<p class="flip" onClick="toggler('9')">Question 9</p>
<div class="panel" id="q9">
<pre>What will be the output?
main(){int a=5,b=10,temp;
temp=a;a=b;b=temp;
printf(\"a=%d\\t\\tb=%d\",a,b);}
</pre>
<input name="q9" type="radio" value="1">1. a=5, b=10<br>
<input name="q9" type="radio" value="2">2. error<br>
<input name="q9" type="radio" value="3">3. a=10, b=5<br>
<input name="q9" type="radio" value="4">4. none<br>
</div>
<p class="flip" onClick="toggler('10')">Question 10</p>
<div class="panel" id="q10">
<pre>What will be the output?
main(){
int a=10;b=5;
int c=a%b;
printf(\"%d\",c);}

</pre>
<input name="q10" type="radio" value="1">1. error<br>
<input name="q10" type="radio" value="2">2. 0<br>
<input name="q10" type="radio" value="3">3. 2<br>
<input name="q10" type="radio" value="4">4. none<br>
</div>
<p class="flip" onClick="toggler('11')">Question 11</p>
<div class="panel" id="q11">
<pre>
main()
{
printf("%d, %d", sizeof('c'), sizeof(100));
}
//program running on turbo c

</pre>
<input name="q11" type="radio" value="1">a)1,2<br>
<input name="q11" type="radio" value="2">b)1,4<br>
<input name="q11" type="radio" value="3">c)2,2<br>
<input name="q11" type="radio" value="4">d)2,4<br>
</div>
<p class="flip" onClick="toggler('12')">Question 12</p>
<div class="panel" id="q12">
<pre>
main()
{
char *a = "Hello ";
char *b = "World";
clrscr();
printf("%s", strcpy(a,b));
}

</pre>
<input name="q12" type="radio" value="1">a)HelloWorld<br>
<input name="q12" type="radio" value="2">b)World<br>
<input name="q12" type="radio" value="3">c)Hello World<br>
<input name="q12" type="radio" value="4">d)Hello<br>
</div>
<p class="flip" onClick="toggler('13')">Question 13</p>
<div class="panel" id="q13">
<pre>main()
{
int i=100;
printf("%d",sizeof(sizeof(sizeof(sizeof(sizeof(sizeof(i))))));
}

</pre>
<input name="q13" type="radio" value="1">a)2<br>
<input name="q13" type="radio" value="2">b)100<br>
<input name="q13" type="radio" value="3">c)runtime error<br>
<input name="q13" type="radio" value="4">d)compile error<br>
</div>
<p class="flip" onClick="toggler('14')">Question 14</p>
<div class="panel" id="q14">
<pre>
What does the following declaration mean?
int (*ptr)[10];
</pre>
<input name="q14" type="radio" value="1">(A)	ptr is array of pointers to 10 integers	<br>
<input name="q14" type="radio" value="2">(B)	ptr is a pointer to an array of 10 integers<br>
<input name="q14" type="radio" value="3">(C)	ptr is an array of 10 integers	<br>
<input name="q14" type="radio" value="4">(D)	ptr is an pointer to array<br>
</div>
<p class="flip" onClick="toggler('15')">Question 15</p>
<div class="panel" id="q15">
<pre>
extern enum cricket x;
int main(){
    printf("%d",x); 
    return 0; }
const enum cricket{
    Taylor,
    Kallis=17,
    Chanderpaul
}x=Taylor|Kallis&gt;Chanderpaul;
Choose all that apply:
</pre>
<input name="q15" type="radio" value="1">(A)	0	<br>
<input name="q15" type="radio" value="2">(B)	15	<br>
<input name="q15" type="radio" value="3">(C)	16	<br>
<input name="q15" type="radio" value="4">(D)	17	<br>
</div>
<p class="flip" onClick="toggler('16')">Question 16</p>
<div class="panel" id="q16">
<pre>
Which of the following is not derived data type in c?

</pre>
<input name="q16" type="radio" value="1">(A)	Function	<br>
<input name="q16" type="radio" value="2">(B)	Pointer<br>
<input name="q16" type="radio" value="3">(C)	Enumeration<br>
<input name="q16" type="radio" value="4">(D)	Array<br>
</div>
<p class="flip" onClick="toggler('17')">Question 17</p>
<div class="panel" id="q17">
<pre>
void main(){
     int check=2;
     switch(check){
        case 1: printf("D.W.Steyn");
        case 2: printf(" M.G.Johnson");
        case 3: printf(" Mohammad Asif");
        default: printf(" M.Muralidaran");
     }}
Choose all that apply:
</pre>
<input name="q17" type="radio" value="1">(A) 	M.G.Johnson <br>
<input name="q17" type="radio" value="2">(B) 	M.Muralidaran<br>
<input name="q17" type="radio" value="3">(C) 	M.G.Johnson Mohammad Asif M.Muralidaran<br>
<input name="q17" type="radio" value="4">(D) 	Compilation error<br>
</div>
<p class="flip" onClick="toggler('18')">Question 18</p>
<div class="panel" id="q18">
<pre>
void main(){
     int movie=1;
     switch(movie&lt;&lt;2+movie){
        default:printf("3 Idiots");
        case 4: printf(" Ghajini");
        case 5: printf(" Krrish");
        case 8: printf(" Race");
     } }
Choose all that apply:
</pre>
<input name="q18" type="radio" value="1">(A) 	3 Idiots Ghajini Krrish Race<br>
<input name="q18" type="radio" value="2">(B) 	Race<br>
<input name="q18" type="radio" value="3">(C) 	Krrish<br>
<input name="q18" type="radio" value="4">(D) 	Ghajini Krrish Race<br>
</div>
<p class="flip" onClick="toggler('19')">Question 19</p>
<div class="panel" id="q19">
<pre>
Consider on following declaration:
(i)        short i=10;
(ii)      static i=10;
(iii)    unsigned i=10;
(iv)      const i=10;
Choose correct one:
</pre>
<input name="q19" type="radio" value="1">(A)	Only (iv) is incorrect	<br>
<input name="q19" type="radio" value="2">(B)	Only (ii) and (iv) are incorrect<br>
<input name="q19" type="radio" value="3">(C)	Only (ii),(iii) and (iv) are correct<br>
<input name="q19" type="radio" value="4">(D)	All are correct declaration<br>
</div>
<p class="flip" onClick="toggler('20')">Question 20</p>
<div class="panel" id="q20">
<pre>
int main(){
    volatile int a=11;
    printf("%d",a);
    return 0;
}
Predict The Output
</pre>
<input name="q20" type="radio" value="1">(A)	11<br>
<input name="q20" type="radio" value="2">(B)	Garbage	<br>
<input name="q20" type="radio" value="3">(C)	-2<br>
<input name="q20" type="radio" value="4">(D)	We cannot predict<br>
</div>
<p class="flip" onClick="toggler('21')">Question 21</p>
<div class="panel" id="q21">
<pre>
What is the range of signed int data type in that compiler
in which size of int is two byte?
</pre>
<input name="q21" type="radio" value="1">(A)	-32767 to 32767	<br>
<input name="q21" type="radio" value="2">(B)	-32768 to 32768	<br>
<input name="q21" type="radio" value="3">(C)	-32767 to 32768	<br>
<input name="q21" type="radio" value="4">(D)	-32768 to 32767<br>
</div>
<p class="flip" onClick="toggler('22')">Question 22</p>
<div class="panel" id="q22">
<pre>
#include&lt;stdio.h&gt;
int main(){
    char a=250;
    int expr;
    expr= a+ !a + ~a + ++a;
    printf("%d",expr);
    return 0;
}
</pre>
<input name="q22" type="radio" value="1">(A)	249	<br>
<input name="q22" type="radio" value="2">(B)	250	<br>
<input name="q22" type="radio" value="3">(C)	0<br>
<input name="q22" type="radio" value="4">(D)	-6<br>
</div>
<p class="flip" onClick="toggler('23')">Question 23</p>
<div class="panel" id="q23">
<pre>
(i)char volatile register unsigned c;
(ii)volatile register unsigned char c;
(iii)register volatile unsigned char c;
(iv)unsigned char volatile register c;
</pre>
<input name="q23" type="radio" value="1">(A)	Only (i) is correction declaration<br>
<input name="q23" type="radio" value="2">(B)	All are incorrect<br>
<input name="q23" type="radio" value="3">(C)	All are correct but they are different<br>
<input name="q23" type="radio" value="4">(D)	All are correct and same<br>
</div>
<p class="flip" onClick="toggler('24')">Question 24</p>
<div class="panel" id="q24">
<pre>
#include&lt;stdio.h&gt;
int main(){
    int a=-5;
    unsigned int b=-5u;
    if(a==b)	printf("Avatar");
    else	printf("Alien");
    return 0;	}
</pre>
<input name="q24" type="radio" value="1">(A)	Avatar	<br>
<input name="q24" type="radio" value="2">(B)	Alien	<br>
<input name="q24" type="radio" value="3">(C)	Run time error	<br>
<input name="q24" type="radio" value="4">(D)	Error: Illegal assignment<br>
</div>
<p class="flip" onClick="toggler('25')">Question 25</p>
<div class="panel" id="q25">
<pre>
main()
{
char *p = "hello world";
p[0] = 'H';
printf("%s", p);
}
</pre>
<input name="q25" type="radio" value="1">A)Hello world<br>
<input name="q25" type="radio" value="2">B)hello world<br>
<input name="q25" type="radio" value="3">c)Error<br>
<input name="q25" type="radio" value="4">D)None of These<br>
</div>
<p class="flip" onClick="toggler('26')">Question 26</p>
<div class="panel" id="q26">
<pre>
int main(){
    double num=5.2;
    int  var=5;
    printf("%d\t",sizeof(!num));
    printf("%d\t",sizeof(var=15/2));
    printf("%d",var);
    return 0; }
</pre>
<input name="q26" type="radio" value="1">(A)	4 2 7 <br>
<input name="q26" type="radio" value="2">(B)	4 4 5<br>
<input name="q26" type="radio" value="3">(C)	2 2 5<br>
<input name="q26" type="radio" value="4">(D)	2 4 7<br>
</div>
<p class="flip" onClick="toggler('27')">Question 27</p>
<div class="panel" id="q27">
<pre>
What will be printed as the result of the operation below:
    main()	{
    int x=20,y=35;
    x=y++ + x++;
    y= ++y + ++x;
    printf(“%d%d\n”,x,y);    }
</pre>
<input name="q27" type="radio" value="1">(A) 5694<br>
<input name="q27" type="radio" value="2">(B) 5794<br>
<input name="q27" type="radio" value="3">(C) 5693<br>
<input name="q27" type="radio" value="4">(D) 5773<br>
</div>
<p class="flip" onClick="toggler('28')">Question 28</p>
<div class="panel" id="q28">
<pre>
What will be printed as the result of the operation below:
    main()	{
        char *p1;
        char *p2;
        p1=(char *)malloc(25);
        p2=(char *)malloc(25);
        strcpy(p1,”Cisco”);
        strcpy(p2,“systems”);
        strcat(p1,p2);
        printf(“%s”,p1);    }
</pre>
<input name="q28" type="radio" value="1">1. Ciscosystems<br>
<input name="q28" type="radio" value="2">2. systemsCisco<br>
<input name="q28" type="radio" value="3">3. Syntax Error<br>
<input name="q28" type="radio" value="4">4. Runtime Error<br>
</div>
<p class="flip" onClick="toggler('29')">Question 29</p>
<div class="panel" id="q29">
<pre>
What will print out?
main() {
   char *p1=“name”;
   char *p2;
   p2=(char*)malloc(20);
   memset (p2, 0, 20);
   while(*p2++ = *p1++);
   printf(“%sn”,p2); } 
</pre>
<input name="q29" type="radio" value="1">1. Syntax Error<br>
<input name="q29" type="radio" value="2">2. Runtime Error<br>
<input name="q29" type="radio" value="3">3. Empty String<br>
<input name="q29" type="radio" value="4">4. None of These<br>
</div>
<p class="flip" onClick="toggler('30')">Question 30</p>
<div class="panel" id="q30">
<pre>
 #define swap(a,b) a=a+b;b=a-b;a=a-b;
    void main()    {
        int x=5, y=10;
        swap (x,y);
        printf(“%d,%d\t”,x,y);
        swap2(x,y);
        printf(“%d,%d\n”,x,y); }
    int swap2(int a, int b) {
        int temp;
        temp=a;
        b=a;
        a=temp;
        return 0; }
</pre>
<input name="q30" type="radio" value="1">1. 10,5 10,5&nbsp;&nbsp;
<input name="q30" type="radio" value="2">2. 5,10 5,10&nbsp;&nbsp;
<input name="q30" type="radio" value="3">3. 10,5 5,10&nbsp;&nbsp;
<input name="q30" type="radio" value="4">4. 5,10 10,5&nbsp;&nbsp;
</div><br>
<button onclick="redirect();">Submit <?php echo $_SESSION["user"];?></button>
</div>
</body>
</html>