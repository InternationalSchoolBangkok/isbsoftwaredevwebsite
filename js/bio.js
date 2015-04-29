var names = ["Our Team","Nico","Adit","Kolatat","Judge","Kat","Daiki","Riddh","Joseph","Ben","Nam","Rod","Ryan"]

var bio = [
//default
"Hover over anyone to view more information about them!",
//nico
"Nico has always been fascinated by society's ironic disability to craft its own software despite its utmost dependence on it. He realized that kids had the intelligence to do brilliant things but almost none where utilizing it to do so. All that was required was a push in the right direction.  Thus, the software development club was born.",
//adit
"Adit has always been intrigued by technology, especially the side of devices and software that users could not see. Despite a lack of experience in the field, he realized that other students also had a passion for the development of programs for others. Therefore he helped found the ISB Software Development Club to provide his peers with an outlet to learn and practice their skills in this area.",
//kola
"Happy Kola is happy, and with projects that finally require more than basic knowledge of programming, Happy Kola is happier than ever. Happy Kola is happy that by joining the Software Development Club, he is able to use his skills not for projects that will make only him happy, but ones that will benefit students and teachers and create great happiness in everyone who use them.",
//judge
"No Bio",
//kat
"Katrina has always been fascinated by the Internet. As soon as she was old enough to realize that websites were made by real people and not magical internet fairies, she learned how to make her own. She joined Software Development Club to find more opportunities to practice and improve upon her hobby of web development.",
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


