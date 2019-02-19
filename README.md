# scielobr_xmltopdf
ScieloBR XML to PDF

A PHP implementation of Scielo's brazilian XML standard (http://docs.scielo.org/projects/scielo-publishing-schema/pt_BR/latest/) using simplexml and fpdf to output pdfs. The general purpose of this project is generate pdf files from XML, so that there's no need (or at least there's a minimal need) to check manually the output files for whole issues or individual articles. This is being thought as an independent server application, although it wouldn't be any difficult to implement it as an OJS plugin so that the pdf generation would happen as a new issue (with marked XML files through Scielo Brazil's tool, Markup) is published.

This will be done functionally, ie don't expect OO bullshit; it's not my intention to write bloated and confusing OO software.
