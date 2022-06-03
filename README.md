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


Certain technologies and techniques were utilised to easy the development process.  I personally find while CSS is relatively easy to pick up and understand compared to other computer languages, the cascading nature of this language makes debugging a comparative, 'nightmare'.  Therefore I used as many proven CSS tools to my disposal to mitigate this debugging challenge.   Namely; SASS for the the CSS organisation, Block Element Modifier techniques (BEM) to make CSS easy to follow and subsequently fix.  Finally,  Grid and Flexbox CSS techniques were heavily used in this project to keep the project responsive and for the user interface (UI) to look intuitive.    

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

Now the project was not a challenge on the aesthetic side of the UI.  To ameliorate that time consuming task the student was allowed to take two designs and looks of an already successful music sites and do a hybrid of the two.  In this example I took the design of the music band ZZtop website (https://www.zztop.com/) and fused the site with content of the Metallica site (https://www.metallica.com/)

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

Thinking about the layers of computing language for a minute, from machine code closet to the processor all the way to high-level languages that are platform independent - it is  frameworks that sit on the highest level furthest away from said processor.  Therefore, the thinking from the university professors were that if one does not have a relatively deep understanding of the core language underneath the framework, when errors happen, which they will inevitably will, solving said errors become very difficult indeed.   

Having said that, I fully understand the concept a efficient web developer framework provides. A lot of web development tasks are repetitive so the, 'components' that these frameworks provide can abstract away these repetitive tasks. Furthermore, frameworks  provides a more explicit way to compartmentalise the code base.  MVC principles are heavy utilised with these frameworks.  To show I understand the MVC concept, I know the, 'M' stands for model and that is where the data resides through some sort of database language.  The, 'V' is the view is where the user interface technologies reside (think html CSS, javascript) and 'C' is the control  this is where the language that drives it all by communicating with the model and the view ( this will be a language such as PHP or Node.js depending on what stack one is using).

[Angular](https://angular.io/ "Link To Angular")  from what I understand uses the full MVC architecture within its framework.  As a consequence, it is a more time-consuming framework to learn, understand and progress with.

[React](https://reactjs.org/ "Link To React") on the other hand is more of a Library ( you can dip in and out depending on the web developer project needs) than a framework.  Focusing mainly on the view side of things in the MVC architecture.  Consequently it is faster to pick up and subsequently the more popular of the two.

I am aware building apps with these frameworks should be my next step and I aim to do just that.  That is where I am going next.

</br>

# New Skills Achieved

</br>

### Core Language Progression

</br>

##### BEM

</br>

I have been dabbling with BEM CSS practices prior to undertaking this development project and I can safely say I am now a full supporter of using these methods.

However, this method, like anything doesn't come without its downsides.  The downside is that it is CSS class heavy - very heavy.  You practically name classes for every line of html element code.  That means more time at the html stage.  However, when one becomes comfortable writing in such a away, developmental speed differences is almost non existent to the traditional way of using html and CSS.  However and more importantly, debugging CSS becomes a much more seamless process.  That last point was the game changer for me.

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

In other words, I found that when I did amend the file structure the bottleneck seemed to be accessing the relevant file path.  

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

Until then, in my humble opinion, it should be one grid in row form for the whole site top to bottom, then within each row another grid this time with columns and rows set up.  Resulting a tight, responsive layout structure while maintaining that important semantic HTML. 

<br/>   

#### Event Propagation

<br/>
Traversing up and down the Document Object Model (DOM) with the event object almost seemed like, 'cheating' when I learned this.  I could manipulate the DOM with javascript before I knew this technique, however, this makes everything so much easier.  In this example of how easy this makes DOM manipulation to be, is that you can even access the, '**wrong**' element but bubble up or down to the correct element and manipulate the DOM from there.  

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


I also took about a month or two to learn all the git methods and uploading to git via the mac terminal.  The source I use was mostly from the YouTuber Corey Schafer, so "shout out" to him and thank you so much Corey -  [Corey's Git Terminal Tutorials](https://www.youtube.com/results?search_query=cory+shafer+git+terminal "Corey's git terminal training")  

After my graduation I realised I needed to learn this if I had any aspirations working in coding teams in development projects.  Sure, one can use software to do the same thing, but it is better to take the time to learn the actual code from the command line interface (CLI) so that your employment opportunities are wider and not restricted to a type of git software.  I don't need to say GitHub is the version control I use for obvious reasons, but using git via the terminal made the uploads to GitHub a straightforward process.  This was a great skill to add to my ever expanding developer tool belt.

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

I have used the power of AJAX in many other web projects.  In fact, my dissertation was a development project essentially  using AJAX to compare popular JavaScript libraries consuming web services, which see - ([CLIENT SIDE](https://github.com/MichaelCrawley1/MscClientSide     )) ([SERVER SIDE](https://github.com/MichaelCrawley1/MscServerSide1)).  However, during this project brought about another, ***'aha moment'*** and that something I will be sure to utilise in the future.  

I used AJAX differently here that what I did with my university project.  In my dissertation I was more concerned bringing the data back from the bespoke built web service and parsing that data and displaying the data in the client UI.  

For this case, that wasn't at the all the concern.  In fact this AJAX solution didn't need to display anything. Alternatively, what it did do was serve as a way to do some heavy lifting in the background away from the UI.

<br/>

#### The Challenge

<br/>

I was finding in the admin section of this web project that when the, 'administrator' selects an image to upload but then for whatever reason changes his/her mind on the image uploaded, the aforementioned [W3schools](https://www.w3schools.com/php/php_file_upload.asp) solution meant the image was already stored in the site's image directory and couldn't be taken out.

<br/>

![Change of mind problem](https://i.imgur.com/WvPeiVE.png "Change of mind problem")

<br/>  

One way to sort this - on the original page where the image uploading was happening was to unlink the image when the administrator inevitably returns to that page due to the sites architecture, as you can see above when clicking the option, 'Ooops go back'.  While this solved this  problem, consequently created other problems like taking out the same image used twice in the UI for different news stories!

<br/>


#### Arriving At The Solution

<br/>

I arrived at this solution by chance rather than designing the solution in my head first.  I did however know what was needed in the first step.

When the administrator clicks the option, 'Ooops go back' then the unlinking of said image has to happen on that click event.  The challenge to be solved was to unlink the image before the administrator goes back to the original image upload page - how to do that?

<br/>  

**Enter AJAX to the rescue!**

<br/>

In retrospect my AJAX solution was akin to something like a sandbox or a honeypot solution, although I had no idea I was doing that at the time. 

What transpired with this AJAX solution was that I already had a sort of solution in place with the aforementioned unlinking images from the original image uploading page.  

I remember talking in my head for a moment by saying, "can I copy that first page solution to a separate php file and only call it up when a user clicks back to the original page after uploading an image?" 

That is where AJAX solution came in.  I quickly copied over the php code to a separate file that I have subsequently named, "ajaxUnlink.php" and then immediately drew up a new javascript file with a basic AJAX request.  Which see;

<br/>

**The sandbox type solution below that does the heavy lifting when the administrator changes his/her mind on image uploaded**

<br/>

![ajaxPHPFile](https://i.imgur.com/bB3XCH6.png "ajax php file for image unlinking")

<br/>



**The simple Ajax script that acts when the user clicks to go back on their image they selected:**
<br/>

![ajax request to the php unlinking page](https://i.imgur.com/ShbqT2s.png "ajax request to the php unlinking page")

<br/>

With the above solution I have now learned and realised that AJAX is not solely about consuming data, 'on the fly' but can be used to work around very compartmentalised and esoteric UI interaction issues.

<br/>

## Final Lesson Learned - The Value Of Commenting The Code

<br/>

In this project I have opted to comment every line possible.  From the HTML code, the JavaScript code to the PHP and MySql code.  This was a deliberate strategy.  However when I eventually do become employed as a developer my future comments will be less intense as there will be less need to be as explicit with your comments because your code competency will not be question as severely as it is at potential employment stage.  Incidentally, I have subsequently found there was more utility in commenting the HTML side of things rather than the CSS side of things - CSS is the properties used, HTML gives you the chance to explain the CSS solution used.

<br/>

#### For Potential Employers To View

<br/>

  I am now making a big push to gain commercial web developer experience.  I am fully aware of the risk to potential employers and clients alike and the questions they need answered when hiring a new, junior-level developer.  If they are to risk in taking on a junior developer they will want to know does this potential developer know why he/her used the code in the way that they have?  

After a year or two of study most of us students can find a way to, 'hack a development solution'.  However, it takes far greater study and time to understand why the solution you have, 'hacked' works the way it does and therefore to communicate that programming wisdom gained to others.  This I feel is an essential skill to cultivate if a developer has aspirations working within development teams and pitching to new clients.      

So what better way to show potential employers and clients alike that, as an aspiring junior developer, that you do know the solution you chose works the way it does by explicitly showing and telling them how through code comments?  

<br/>

#### Other Benefits To Commenting The Code Base

<br/>


The benefit to heavily commenting code doesn't just stop with explicitly showing potential employers and clients that you know what you are doing.  It also has the pleasant consequence of encouraging better solutions and opportunities for code refactoring too.  

Heavy comments encourages one to be very analytical and forensic with their code base.  One is able to see problems very quickly that don't adhere to DRY (Don't repeat yourself) and SR (Single Responsibility) principles and amend accordingly.

Furthermore, forensically looking at the CSS code base encouraged me to get rid of repeating properties and redundant CSS classes.

<br/>

**This GitHub commit is an example of this happening in this project, which see;**

<br/>

![Rid of CSS](https://i.imgur.com/oLjy0Pd.png "Getting rid of some redundant css") 

      

<br/>


# Conclusion

<br/>

In conclusion, this has been the biggest, challenging development project I have taken thus far.  In retrospect, the skills and techniques I have now learned via this CRUD app will be invaluable moving forward.  

CRUD app development projects are great learning opportunities for budding web developers, especially if they are built with only core languages with no help from libraries or frameworks.  

This is not to say there is no use to libraries and frameworks.  Of course there are great uses to these excellent code abstraction layers - but not for the beginner.  The best way to learn to understand what the these frameworks are doing is to first, 'code-up' the CRUD solution yourself.

While this makes it a very challenging task to the beginner and may take them a long time to complete, as it did with me,  the time spent working with and working out the true heterogeneous platform that dynamic websites are, is an invaluable skill to cultivate.

The very nature of web development projects enables them to be highly cohesive entities, however, they are also unfortunately unavoidably highly coupled systems too.  A recurring challenge for web developers is dealing with errors and bugs that arise from one of the dependencies that has been invoked from another interdependent component.  Developing CRUD apps is perhaps the best way to, 'see' and understand how this development phenomenon manifests.  

with this project using an Agile SDLC process with Task Driven Development (TDD) techniques (fail, pass, refactor) 

***"When an aspiring developer has learned to create and code up a CRUD app from the ground up proves to be the perfect programming barometer for future employers to make their hiring decisions in taking on a new junior developer."***  

I state this because when one has built up a CRUD type app with all the core client and core back end languages means that this individual will now develop future projects with a view to how all the web technologies interact with each other and design, code and develop accordingly.  Organisations want and need developers to approach web application tasks in this way, ensuring the, 'bigger picture' is always kept at the forefront of the developers mind.  This in turn means these type of future developers can greatly contribute to developer teams as they, 'get' what the potential developed app is suppose to do and consequently and perhaps more importantly know how to take this complicated, interdependent entity to provide the end user with the best user experience (UX) possible.

<br/>

Kind Regards

<br/>

Michael J Crawley - Aspiring Web Developer





<br/>

## Contributors



-	Michael J Crawley <crawley349@btinternet.com> 
 
## Licence

MIT License

© Michael J Crawley, Web developer, 2022



Permission is hereby granted, free of charge, to any person obtaining a copy of this software and associated documentation files (the "Software"), to deal in the Software without restriction, including without limitation the rights to use, copy, modify, merge, publish, distribute, sublicense, and/or sell copies of the Software, and to permit persons to whom the Software is furnished to do so, subject to the following conditions:

The above copyright notice and this permission notice shall be included in all copies or substantial portions of the Software.

THE SOFTWARE IS PROVIDED "AS IS", WITHOUT WARRANTY OF ANY KIND, EXPRESS OR IMPLIED, INCLUDING BUT NOT LIMITED TO THE WARRANTIES OF MERCHANTABILITY, FITNESS FOR A PARTICULAR PURPOSE AND NONINFRINGEMENT. IN NO EVENT SHALL THE AUTHORS OR COPYRIGHT HOLDERS BE LIABLE FOR ANY CLAIM, DAMAGES OR OTHER LIABILITY, WHETHER IN AN ACTION OF CONTRACT, TORT OR OTHERWISE, ARISING FROM, OUT OF OR IN CONNECTION WITH THE SOFTWARE OR THE USE OR OTHER DEALINGS IN THE SOFTWARE.



## Author Info

* Website - [Michael J Crawley](https://michael-crawley-portfolio.netlify.app/ "My Portfolio Site")

[Back To The Top](#the-metallica-project)

