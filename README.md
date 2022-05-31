<h1 align="center">The Metallica Project (CRUD APP)</h1>







**Version 1.0.0**

<br/>



## Client Home Page

<br/>

![Project Image](https://i.imgur.com/NErDrch.png "The screen shot of the home page")

<br/>

## Admin Home Page
<br/>

![Admin Image](https://i.imgur.com/z845CjB.png "This is the admin screen")

<br/>



The motivation for this project was quite simple.  I am a recent software development graduate and I didn't have a CRUD (Create, Read, Update, Delete) type app in my portfolio to show.  Through this development life cycle I now do.  It is all core, no frameworks used.  HTML5, CSS, Javascript with AJAX techniques and PHP and MySql.  


Certain technologies and techniques were utilised to easy the development process.  I personally find while CSS is relatively easy to pick up and understand compared to other computer languages, the cascading nature of this language makes debugging a comparative, 'nightmare'.  Therefore I used as many proven CSS tools to my disposal to mitigate this debugging challenge.   Namely; SASS for the the CSS organisation, Block Object Modifier techniques (BEM) to make CSS easy to follow and subsequently fix.  Finally,  Grid and Flexbox CSS techniques were heavily used in this project to keep the project responsive and for the UI to look intuitive.    

</br>



### Table Of Contents

*	[Description](#description)
*	[Technologies](#technologies-tools-and-techniques)
*	[Lessons Learned](#lessons-learned)
*	[Licence](#licence)
*	[Author Info](#author-info)





---

</br>

# Description

</br>

This was a project I was challenged to do from my time at university in 2018-20.  The challenge was to take a subject you love (music here) and make a CRUD web application out of it using the core internet languages of HTML5 CSS3 Javascript, PHP and MySql.

Now the project was not a challenge on the aesthetic side of the UI.  So to ameliorate that time consuming task the student was allowed to take two designs and looks of an already successful music sites and do a hybrid of the two.  In this example I took the design of the music band ZZtop website (https://www.zztop.com/) and fused the site with content of the Metallica site (https://www.metallica.com/)

<br/>

***The design of the site was taken from ZZtop's site here:***

![ZZtop's site](https://i.imgur.com/wgwFlsu.png "this is the design I used")

<br/>

***While Metallica's site provided the content:***

<br/>

![Metallica's site](https://i.imgur.com/0sD4drw.png "Metallica provided the content" )


<br/>

#### No Need To Be Responsive

<br/>

Subsequently, the project didn't need to be responsive, it could have a fixed width of the desktop sized screen we used in university (1980px).  Rather it was a test of the dynamism of a web site.  Could you, as an aspiring web developer build an admin system to enable someone who is not web developer literate to update the site, change the site images or delete the site's content when they want?

Turns out I could.  I passed the module although it could have been better.  The main challenge I found at the time was use of sessions to keep the data from the database following the architecture of the site and the header redirections for form validation errors. Which see;

<br/>

![Validation errors](https://i.imgur.com/EByakXY.png "using header and sessions for site navigation")

<br/>

Having said all that, after submitting the university project I was well aware that I couldn't use this project to showcase to potential employers as a portfolio piece.   As a web site not being responsive is not a website at all these days.  In the intermediate time, along with doing other projects, I have cleaned that up and refactored some of the long winded code, especially the image handling on the admin side of the site.  

For example, [W3schools](https://www.w3schools.com/php/php_file_upload.asp) coding solution is excellent for the uploading of images but there are so many nested, 'IF' statements.  I tried my best to refactor that with associated arrays and with more function abstraction.  It didn't shorten the code, but i think it made it easier to follow.  

</br>


**An refactoring example down below:**

</br>



![Code Refactor](https://i.imgur.com/GYyJptc.png "Code refactor to associated arrays and more functions")      

</br>

---

</br>

<h1 >Technologies Tools And Techniques

</h1>

</br>



|</br>  Technologies :computer: </br></br>   |   </br>  Tools and Techniques :hammer_and_wrench: </br> </br>  |  
|------| :------------: |
| HTML 5  | Sublime Text Editor |
| CSS 3 (with grid and flexbox) | SASS preprocessor|
| Javascript (with AJAX techniques)| Browser sync for immediate reloads in local environment|
| PHP |NPM for local environment techniques |
| MySql | Git on the CLI uploading to GitHub version control system |


</br>

---


</br>

# Lessons Learned

</br>

This section is very important to highlight.  Important because as an aspiring web developer, it would serve as great utility for potential employers that view this repository to be aware of where I think I am at with my development journey and where I think I need guidance in moving forward.

I try to live as close as possible to the Japanese philosophy of, 'kaizen'. This translated means continuous and never ending improvement to things that matter.  Web development improvement really matters to me.

Having communicated my psychology behind my journey I will try and illustrate what I think  I learned from this project and what I think needs developed moving forward.


</br>

### Bit Of Background - Why no Framweworks yet?

</br>

I understand the industry is framework happy and component hungry presently in the world of web development.  As of yet, I have not dove into the murky world of framework dependency.  At university, the students, rightly or wrongly depending on one's view, were encouraged to remain on the core languages until a deep understanding has been achieved before progressing to the abstraction of said core languages that the frameworks provide. 

Thinking about the layers of computing language for a minute, from machine code closet to the processor all the way to high-level languages that are platform independent - it is  frameworks that sit on the highest level furthest away from said processor.  Therefore, the thinking from the university professors were that if one does not have a relatively deep understanding of the core language underneath the framework, when errors happen which they will inevitably will, solving said errors become very difficult indeed.   

Having said that, I fully understand the concept a efficient web developer framework provides. A lot of web development tasks are repetitive so the, 'components' that these frameworks provide can abstract away these repetitive tasks. Furthermore, frameworks  provides a more explicit way to compartmentalise the code base.  MVC principles are heavy utilised with these frameworks.  To show I understand the MVC concept, I know the, 'M' stands for model and that is where the data resides through some sort of database language.  The, 'V' is the view is where the user interface technologies reside (think html CSS, javascript) and 'C' is the control  this is where the language that drives it all by communicating with the model and the view ( this will be a language such as PHP or Node.js depending on what stack one is using).

[Angular](https://angular.io/ "Link To Angular")  from what I understand uses the full MVC architecture with its framework.  As a consequence, it is a more time-consuming framework to learn, understand and progress with.

[React](https://reactjs.org/ "Link To React") on the other hand is more of a Library ( you can dip in and out depending on the web developer project needs) than a framework focusing mainly on the view side of things in the MVC architecture.  Consequently it is faster to pick up and subsequently the more popular of the two.

I am aware building apps with these frameworks should be my next step and I aim to do just that.  That is where I am going next.

</br>

# New Skills Achieved

</br>

### Core Language Progression

</br>

##### BEM

</br>

I have been dabbling with BEM CSS practices prior to undertaking this development project and I can safely say I am now a full supporter of using these methods.

However, this method, like anything doesn't come without its downsides.  The downside is that it is CSS class heavy - very heavy.  You practically name classes for every line of html element code.  That means more time at the html stage.  However, when one becomes comfortable writing in such a away, speed differences is almost non existent to the traditional way of using html and CSS.  However, more importantly, debugging CSS becomes a much more seamless process.  That last point was the game changer for me.

CSS to most of us that are more logical based, rage at this language.  I am well aware CSS was perhaps never meant to be used the way it has been adopted, nevertheless, the fact that it has and we can't find anything better to do the UI styling (yet), debugging CSS when we indent from the html parent down (cascade) can become a coding nightmare (particular as the application grows), and prove to be the bottleneck for very logical-thinking programmers moving forward with the web technologies.  At least it was for me.  BEM solved that dilemma.

I now code with confidence with CSS and feel I can do most essential needed UI manipulation.  Any careless errors become very quick and easy to rectify. One only needs to open up the browser's developer tools, examine the low level class that BEM practices give you, amend said class, resulting in fixing careless mistake in very quick time.

</br>

***An example of using BEM in this project:*** 



</br> 

![BEM Techniques](https://i.imgur.com/G3oU6xF.png "BEM Techniques")

<br/>


##### File Structure

</br>

This project, while, not for profit and deadline vague was nevertheless the biggest I have so far undertaken.  File navigation and file compartmentalisation became a challenge here and I needed to learn an efficient way to anchor relevant code and access the architecture via the code effectively.

In other words I found that when I did amend the file structure the bottle neck seemed to be accessing the relevant file path.  

When one is learning web development be it from books or others, the code (quite rightly) is taught from a very segmented task perspective.  Learn one task, complete and move on to next, repeat process.  There is no real learning of the impact of scale here.  That you find out for yourself, once you are faced with building a project to a scale you have never encountered.

Until now I have always used relative path ways to traverse a web sites architecture. However, being that this project is so far the largest I have developed, I had to come up with more methodical solution.  Enter absolute file paths or rather, 'relative root' paths.

<br/>   

  

###### Html Relative Root Example

<br/>
  

```html


<!-- an html image tag example of using the relative root as the file navigation technique -->


<img src="/metallicaTourProject/img/promo_tour.png" alt="image for tour dates" class="c-big-screen-tour-dates-img">


<!-- notice the "/" before the file navigation begins, this is to begin from the root folder of the project -->






```
<br/>

###### PHP Relative Root Example
<br/>

```php

// This is an example of using the root method when using the php language which see, the require once function is just a function to import another file into the project that you have abstracted away to avoid code repetition. // 


require_once ($_SERVER['DOCUMENT_ROOT']."/metallicaTourProject/abstractHeader.php");








```
<br/>

Just like the BEM for the CSS, this was a game changer for accessing the file architecture.  Those that are aware, when you have an application of any size of note, changes and introducing new code pages can upset the whole site behaviour if one is using relative file paths.  Reason being, these paths have to be constantly amended (on the account that they are, 'relative' to the file compartmentalisation) every time you make the the file navigation levels deeper and deeper.  

To ameliorate this headache, if one access's the file paths from the root of the project and navigate from there, it means that when the project does become heavier you will not lose that site behaviour you have already coded.  Reason being, because accessing paths from the root folder, for want of a better phrase, are, 'rooted' to the home directory and do not waver as the project expands. **That was another great, 'aha' moment!**

 



<br/>


#### CSS Grid & Flexbox
<br/>

CSS Grid and Flex-box are quite simply, as far as I am concerned, 'the best thing since slice bread' when it comes to coding up CSS.  However, and annoyingly, at first glance the techniques are not intuitive to the developer, therefore one must put in the time understand their idiosyncrasies.  However once learned, the power that these CSS techniques offer basically means no need for CSS frameworks.  That maybe a bold statement, however, I think I true one.  

There are two real methods the web developer must utilise when using grid or flex box. One, know the property techniques at element level but also understand that at HTML level you may have to be a little bit cuter to get these techniques to work their magic.  Pay attention to the hierarchical structure of the HTML elements and make sure your flex and grid items are on the correct element and be aware you may also have to put grids and flex's on children HTML items too.  

My technique for the UI structure is I use grid for initial layout of the design of the page (top to bottom, rows only) and then section grids (rows and columns) with flex box items mostly inside these grid sections.

<br/>

***Which see;*** 

<br/>

![The Grid method](https://i.imgur.com/FOpPFXT.png "The Grid Method")

<br/>

**Vertical Layout - Only Grid Rows First:**

<br/>

![The Grid method](https://i.imgur.com/MPvC9Iv.png "The vertical row grid")

<br/>

**Each Section Layout - Grid Rows And Columns**

<br/>

![The Grid method - section rows and columns](https://i.imgur.com/7yPM2Qw.png "The Grid method - section rows and columns")

<br/>

![The Grid method - section rows and columns](https://i.imgur.com/NeBWJIK.png "The Grid method - section rows and columns")

<br/>

Other developers will come up with their own individual ways in using these powerful techniques.  However, I work like this to keep the HTML semantic. Alternatively, if you do grid at overall site layout stage with rows and columns then you will have to flatten the HTML to get the grid to do what you were aiming for.  'Sub-grid' is currently being developed to solve this issue, but it will take time for all the browsers to implement this.

Until then in my humble opinion it should be one grid in row form for the whole site top to bottom, then within each row another grid this time with columns and rows set up.  Resulting a tight, responsive layout structure while maintaining that important semantic HTML. 

<br/>   

#### Event Propagation

<br/>
Traversing up and down the Document Object Model (DOM) with the event object almost seemed like, 'cheating' when I learned this.  I could manipulate the DOM with javascript before I knew this technique, however, this makes everything so much easier.  In this example of how easy this makes DOM manipulation to be, is that you can even access the **wrong** element but bubble up or down to the correct element and manipulate the DOM from there.  

Which see; 

<br/> 

```javascript

function start (e){

// this is a trucated code snippet from the project, but in doing the menu technique to highlight to the user whether they be on mobile or the desktop what actual page they are on of the site due to the navaigation heading to be hightlighted read amongst other white headings to let them know they are in the red page.



	 let splitTheUrlIntoArray = window.location.href.split("/");

	 // look at what you can do with the event object, I can access the 15th link down which is the admin link in the desktop or the 8th link down which is the mobile admin link, and then manipulate those links.  Such powerful stuff!!! 

	 let findTheAdminLinkBig = e.target.links[15];
    let findTheAdminLinkMobile = e.target.links[8];

    if (splitTheUrlIntoArray[4] === "admin") {

        findTheAdminLinkBig.classList.add("c-fixed-mobile-screen-list-item-links--active");
        findTheAdminLinkMobile.classList.add("c-fixed-mobile-screen-list-item-links--active");
    }


	
}






window.addEventListener("load", start, false); 


```

<br/>

#### Git On The Terminal

<br/>


I also took about a month or two to learn all the git methods and uploading to git via the mac terminal.  The source I use was mostly from the YouTuber Corey Shafer, so "shout out" to him and thank you so much Corey -  [Corey's Git Terminal Tutorials](https://www.youtube.com/results?search_query=cory+shafer+git+terminal "Corey's git terminal training")  

After my graduation I realised I needed to learn this if I had any aspirations working in coding teams in development projects.  Sure, one can use software to do the same thing, but it is better to take the time to learn the actual code from the command line interface (CLI) so that you employment opportunities are wider and not restricted to a type of git software.  Obviously I don't need to say GitHub is the version control I use for obvious reasons, but using git via the terminal made the uploads to GitHub a straightforward process.  This was a great skill to add to my ever expanding developer tool belt.

<br/>


```bash 

git status 

git log

git branch comments 

git checkout comments 

git add -a 

git commit -m "this is showing a few steps of using git on the command line interface level (CLI)"

git reset

```     
<br/>

#### AJAX For Image Unlinking

</br>

I have used the power of AJAX in many other web projects.  In fact, my dissertation was a development project essentially  using AJAX to compare popular JavaScript libraries consuming web services, which see - ([CLIENT SIDE](https://github.com/MichaelCrawley1/MscClientSide     )) ([SERVER SIDE](https://github.com/MichaelCrawley1/MscServerSide1)).  However, here was another, ***'aha moment'*** and that something I will be sure to utlisee in the future.  

I used AJAX differently here that what I did with my university project.  In my dissertation I was more concerned bringing the data back from the bespoke built web service and parsing that data and displaying the data in the client UI.  

For this case, that wasn't at the all the concern.  In fact this AJAX solution didn't need to display anything. Alternatively, what it did do was serve as a way to do some heavy lifting in the background away from the UI.

<br/>

#### The Challenge

<br/>

I was finding in the admin section of this web project that when the, 'administrator' selects an image to upload but then for whatever reason changes his/her mind on the image uploaded, the aforementioned [W3schools](https://www.w3schools.com/php/php_file_upload.asp) solution meant the image was already stored in the site image directory and couldn't be taken out.

<br/>

![Change of mind problem](https://i.imgur.com/WvPeiVE.png "Change of mind problem")

<br/>  

One way to sort this was on the original page where the image uploading was happening was to unlink the image there when the administrator inevitably returns to that page due to the sites architecture, as you can see above when clicking the option, 'Ooops go back'.  This solved this  problem however, created other problems like taking out the same image used twice in the UI!

<br/>


#### Arriving At The Solution

<br/>

I arrived at this solution by chance rather than designing the solution in my head first.  I knew what was needed in the first step - when the administrator clicks the option, 'Ooops go back' then the unlinking of said image has to happen on that click event but the unlinking has to happen before going back to the image upload page - how to do that?  

**Enter AJAX to the rescue!**

Write Ajax solution follow up here tomorrow



</br>

## Contributors



-	Michael J Crawley <crawley349@btinternet.com> 
 
## Licence

© Michael J Crawley, Web developer

## Author Info

* Website - [Michael J Crawley](https://michael-crawley-portfolio.netlify.app/ "My Portfolio Site")

[Back To The Top](#the-metallica-project)

