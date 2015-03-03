var names = ["Our Team","Nico","Adit","Kolatat","Judge","Kat","Daiki","Riddh","Joseph","Ben","Nam","Rod","Ryan"]

var bio = [
//default
"Hover over anyone to view more information about them!",
//nico
"Nico has always been fascinated by society's ironic disability to craft its own software despite its utmost dependence on it. He realized that kids had the intelligence to do brilliant things but almost none where utilizing it to do so. All that was required was a push in the right direction.  Thus, the software development club was born.",
//adit
"No Bio",
//kola
"No Bio",
//judge
"No Bio",
//kat
"No Bio",
//daiki
"Daiki happens to be a 14 year old Japanese web designer that likes to infinitely solve the Rubik's cube, each under 35 seconds. He is obsessed with easter eggs. In other words, find the easter eggs.",
//riddh
"Riddh Bedi is the General Manager of HS Tech, and a programmer at Software Development Club. Ever since he was a child, he always had a knack for technology and through HS Tech he was able to learn and share knowledge. Born in India, Riddh joined ISB in 2008 and grew up with many multi-cultural influences. In his free time, Riddh enjoys playing video games, badminton and volunteering in community service activities.",
//joseph
"No Bio",
//ben
"Ben is one of the developers of Software Development club. Ever since he was a child, teachers have praised him for your knowledge of technology. He was born in Thailand and have gone to ISB since Kindergarden, growing up in an liberal international community. In your free time, he studies physics, hangs out with his best friend Aditya, and plays video games.",
//nam
"No Bio",
//rod
"No Bio",
//ryan
"No Bio",

]


function showbio(n){
	document.getElementById("bioheader").innerHTML = names[n];
	document.getElementById("biotext").innerHTML = bio[n];
}


