# Project overview
This can be seen on https://test.patafisica.cc/scielo/article.class.php (just a var_dump).

A PHP implementation of Scielo's brazilian XML standard (http://docs.scielo.org/projects/scielo-publishing-schema/pt_BR/latest/) using simplexml and fpdf to output pdfs. The general purpose of this project is generate pdf files from XML, so that there's no need (or at least there's a minimal need) to check manually the output files for whole issues or individual articles. This is meant to be an independent server application, although it wouldn't be any difficult to implement it as an OJS plugin so that the pdf generation would happen as a new issue (with marked XML files through Scielo Brazil's tool, Markup) is published.

# Known Issues
* Many indexed journals do not follow Scielo's standards and that's a deal breaker. I've been following the documentation linked above and we'll see where it leads me.

# Ideas
I'm thinking about using JSON for the internal handling of data, but i'm still not sure. The Scielo XML standard is full of redundancies in a very unorganized way: how come institutional affiliation and email addresses are outside the contributors' fields? Those data are bound together but are also literally scrambled in the XML files, which demands many workarounds circumvent. 

# Technical rant/other gibberish
You can see there are two different XML files: one (artigo.xml) is a XML file i got from a random journal indexed by Scielo, and the other (artigo2.xml) was taken directly from Scielo publish schema's examples. It's not hard to see both files are different and still indexable either way, which grinds my gears.
