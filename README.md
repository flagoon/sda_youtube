This is a simple project in laravel we are doing as an exercise for SDA. This is my version, that is slightly different than common version.

First of all I'm trying to implement easy authorization with roles (admin and normal user). I found great tutorial from 
**everton zp** at Medium. Very informative, clear some things for me. I created one admin user, who will be responsible
for removing users, adding new categories and that's it. 

Normal user will have access to his movies he add from youtube. The user could see all his movies,
grouped by category, movies in category, single movie page and logout page. 

##Adding movies
User will have to provide link to youtube movie and **categories** it should be placed. PHP should download the page
with youtube movie, extract link for IFrame, title, description and author. Then use those data for supplementing data.

##Adding categories
Categories should be lowercase, only 0-9a-z_-. Admin should have possibility to remove categories. 
Also removing category should change movie category for unassigned (if movie don't have other categories). 

Should user be able to remove movies? Perhaps... Will see if it will go smooth.