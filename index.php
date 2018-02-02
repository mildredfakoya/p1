<!doctype html>
<html lang ="en">
<head>
  <title>Mildred Fakoya</title>
<meta charset ="utf-8">
<meta name = viewport content = "width=device-width,initial-scale =1.0">
<link rel ="stylesheet" type ="text/css" href ="css/style.css">
</head>
<body>
<div class ="textcontainer">
<h1>Mildred Ayeesha Fakoya</h1>
<img src ="images/me.jpg" alt ="Picture of Mildred Fakoya" class ="imgright">
<p>My name is Mildred Ayeesha Fakoya. I am 31 Years Old. I live in Saint Vincent & the Grenadines. I am a Nigerian by Birth.<br/>
I have been married for 8 years now. I have two sons ages 7 years and 6 years. </p>
<p>I hold a BSc. in Computer Science from Kogi State University, Nigeria. <br/>
As a child, I dreamt of becoming a Medical Doctor. Getting admitted, into a Nigerian University to study Medicine & Surgery, was very difficult, so i settled for Computer Science as my first degree. After I graduated from the University with my degree, I felt something was missing. Was it my unfulfilled passion for wanting to be a doctor? I didn't yet understand what it was.
</p>
<p>One year after Graduation, I was employed at a bank as a relationship officer. I spent one year at this job and resigned because i felt no sense of fulfillment.<br/>Long story short, I decided to put my degree to use. I started some self trainning in programming. I started with Visual Basic and C then JAVA, MySQL, HTML, CSS, JavaScript, PHP and some few others. I started to feel fulfilled but there was something more.<br/>I wanted to be a developer for Health Information Systems. The realization of this gave me the type of fulfillment that i have been longing for.
So i took the path to certifications form Microsoft and Oracle. I didn't like being trainned, all I always needed were textbooks and relevant softwares. After few years of self trainning, i took a couple of certification exams from both Microsoft and Oracle and I passed them all.
I felt i had proven a point to myself. I started on the path to my dream. </p>
<h2>Path to Harvard Extension School</h2>
<p>I am a sofware for Developer for Health information systems and i feel having a graduate degree in Software Engineering will perfect my skills.</p>
<?php
function quotes(){
$quotes = array();
$quotes[0] = "The first to apologize is the bravest. The first to forgive is the strongest. The first to forget is the happiest -- Anonymous";
$quotes[1] = "If the lord does not protect a city the watchman watches in vain -- Psalm 127:1";
$quotes[2] = "The Patient Dog eats the fattest bone: but sometimes the patient dog will die of hunger -- African Proverb";
$quotes[3] = "In the kingdom of the blind the one-eyed man is the king : but if everyone in the kingdom is blind how can they verify that their one-eyed king actually has a one eye. -- Fela Kuti";
$quotes[4] = "He that laughs last laughs best: but sometimes he that laughs last does not understand the joke -- African Proverb";
$quotes[5] = "Perfection is finally attained not when there is no longer anything to add but when there is no longer anything to take away.";
echo $quotes[$random_keys = array_rand($quotes,1)];

}
?>

<h3>Random Quotes</h3>
<?php quotes();?>
</div>
</body>
</html>
