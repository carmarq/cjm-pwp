# cjm-pwp
repository for personal website project

### Milestone 1 Feedback
Very cool direction for your PWP - I'm really looking forward to seeing what you create! Your purpose, audience, goal and Personas are thoughtful and detailed - nice work.

I do think the Personas could be adjusted and a bit more refined, but otherwise what you have here is a good start. Here's some food for thought: 

Persona #1 (Gordon) doesn't really sound like he reflects your primary or secondary audience. He doesn't sound like someone who is active in the IT and Web Development community (your secondary Audience as stated), nor does he sound like someone who would be involved in direct IT hiring decisions for anything perhaps other than the most entry-level of positions - like content updates - since he does not know anything about IT. A more likely scenario for a person like Gordon would probably be that he'd  hire an established web development firm create and manage his online presence at scale, then he'd perhaps have someone, one of his exisiting employees probably, do content updates and social media. A generally low-paid semi-technial "administrative" task actually. Again, probably not your primary audience.

Persona #2 (Keisha) actually sounds like she would be your primary audience, and I think her Persona could use a bit more detail. It sounds like she would be more interested in the poetry and design content and an engaging UI design than just the performance of the site (not that performance is unimportant). What concerns/behaviors/preferences/frustrations might be relevant to her that would shape your content and UI design concepts for the site going forward? What sites and media does she currently visit or follow? What social media does she use? How would you design your site and content around a user like Keisha  to make it really engaging and interesting to a person like her?

Your project is set up correctly, and overall your code looks good but there were a couple of minor technical points. Have a look at Edits &amp; Suggestions below. You're ready to begin work on Milestone 2a, and I look forward to seeing your design and content ideas take shape!

Your Milestone 1 passes at [Tier II](https://bootcamp-coders.cnm.edu/projects/personal/rubric/) (Submitted late, within one day of due date/time).

#### Edits &amp; Suggestions
- Line 3: The `<meta>` tag should go inside the `<head>`.
- Tiny detail: Out-dent the closing `</html>` tag.
- Tiny detail #2: In your .gitignore, line 2 should be: `.DS_Store` (dot is missing) 

### Milestone 2a Feedback
Nice work in redefining your project direction - this is now in line with the project specs. The switch from vertical to horizontal scrolling will be very tricky to accomplish on a responsive site - and I strongly advise against it. Based on your level of work with the CSS and Bootstrap challenges - I'm concerned that you will need much more practice before you will be able to successfully build this kind of sophisticated interactivity. Keep it simple - it's more difficult than it may appear. And while horizontal scrolling is an established UX pattern on mobile for certain interactions, it is *not* well established for your particular use case here. Here's a good article on this subject: https://uxplanet.org/bidirectional-scrolling-is-here-to-save-responsive-design-be1afe53206d. TL; DR: I feel that you run the risk of confusing your mobile users who will be much more accustomed to a vertical scroll to navigate a simple web page.

I recommend that you keep a vertical scroll for both desktop and mobile. This will be much more straightforward to build, and is a more appropriate direction for your demonstrated skill level with HTML, CSS, JS and Bootstrap at this time.

You might be interested in something like [fullPage](https://alvarotrigo.com/fullPage/) - but be warned - this one is tricky to integrate with Bootstrap. Let me know and I can help guide you.

[FontAwesome](https://fontawesome.com/) is a good quality free library for including iconography. Custom icons are also an option too - of course. I would ideally scale down the size of the social media icons from what is shown in the wireframes. They are way huge - and that's not a modern, professional, refined look.

You make want to read ahead regarding the contact form integration - and that documentation is here: https://bootcamp-coders.cnm.edu/class-materials/jquery-validated-captcha-form/

Again, nice work redefining your direction. Keep it simple - much better to build something simple that's excellent, than somthing ambitious but poorly executed. Your Milestone 2a passes at [Tier II](https://bootcamp-coders.cnm.edu/projects/personal/rubric/). You are clear to begin development on your PWP.

**We'll be building PWP in a file named index.php inside of /public_html**. Please note that no publicly-accessible site files should live outside of the /public_html directory. Remember use an organized and standards-compliant directory structure to house all images, JavaScript, CSS, etc. We are done with the /documentation directory for now!

#### Update Milestone 2a Feedback
There are some minor issues with your HTML in milestone-2.php - be careful!
- `<meta>` charset tag is mistyped and in the wrong place.
- Always use the `alt` attribute on `<img>` tags.  
