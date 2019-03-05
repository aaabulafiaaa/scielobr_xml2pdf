<?php
ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);
error_reporting(E_ALL);

	class latex{
		public function __construct($array){
			$latex = <<<EOT
%% bare_conf.tex
%% V1.3
%% 2007/01/11
%% by Michael Shell
%% See:
%% http://www.michaelshell.org/
%% for current contact information.
%%
%% This is a skeleton file demonstrating the use of IEEEtran.cls
%% (requires IEEEtran.cls version 1.7 or later) with an IEEE conference paper.
%%
%% Support sites:
%% http://www.michaelshell.org/tex/ieeetran/
%% http://www.ctan.org/tex-archive/macros/latex/contrib/IEEEtran/
%% and
%% http://www.ieee.org/

%%*************************************************************************
%% Legal Notice:
%% This code is offered as-is without any warranty either expressed or
%% implied; without even the implied warranty of MERCHANTABILITY or
%% FITNESS FOR A PARTICULAR PURPOSE! 
%% User assumes all risk.
%% In no event shall IEEE or any contributor to this code be liable for
%% any damages or losses, including, but not limited to, incidental,
%% consequential, or any other damages, resulting from the use or misuse
%% of any information contained here.
%%
%% All comments are the opinions of their respective authors and are not
%% necessarily endorsed by the IEEE.
%%
%% This work is distributed under the LaTeX Project Public License (LPPL)
%% ( http://www.latex-project.org/ ) version 1.3, and may be freely used,
%% distributed and modified. A copy of the LPPL, version 1.3, is included
%% in the base LaTeX documentation of all distributions of LaTeX released
%% 2003/12/01 or later.
%% Retain all contribution notices and credits.
%% ** Modified files should be clearly indicated as such, including  **
%% ** renaming them and changing author support contact information. **
%%
%% File list of work: IEEEtran.cls, IEEEtran_HOWTO.pdf, bare_adv.tex,
%%                    bare_conf.tex, bare_jrnl.tex, bare_jrnl_compsoc.tex
%%*************************************************************************

% *** Authors should verify (and, if needed, correct) their LaTeX system  ***
% *** with the testflow diagnostic prior to trusting their LaTeX platform ***
% *** with production work. IEEE's font choices can trigger bugs that do  ***
% *** not appear when using other class files.                            ***
% The testflow support page is at:
% http://www.michaelshell.org/tex/testflow/



% Note that the a4paper option is mainly intended so that authors in
% countries using A4 can easily print to A4 and see how their papers will
% look in print - the typesetting of the document will not typically be
% affected with changes in paper size (but the bottom and side margins will).
% Use the testflow package mentioned above to verify correct handling of
% both paper sizes by the user's LaTeX system.
%
% Also note that the "draftcls" or "draftclsnofoot", not "draft", option
% should be used if it is desired that the figures are to be displayed in
% draft mode.
%
\documentclass[conference]{IEEEtran}
% Add the compsoc option for Computer Society conferences.
%
% If IEEEtran.cls has not been installed into the LaTeX system files,
% manually specify the path to it like:
% \documentclass[conference]{../sty/IEEEtran}





% Some very useful LaTeX packages include:
% (uncomment the ones you want to load)


% *** MISC UTILITY PACKAGES ***
%
%\usepackage{ifpdf}
% Heiko Oberdiek's ifpdf.sty is very useful if you need conditional
% compilation based on whether the output is pdf or dvi.
% usage:
% \ifpdf
%   % pdf code
% \else
%   % dvi code
% \fi
% The latest version of ifpdf.sty can be obtained from:
% http://www.ctan.org/tex-archive/macros/latex/contrib/oberdiek/
% Also, note that IEEEtran.cls V1.7 and later provides a builtin
% \ifCLASSINFOpdf conditional that works the same way.
% When switching from latex to pdflatex and vice-versa, the compiler may
% have to be run twice to clear warning/error messages.






% *** CITATION PACKAGES ***
%
%\usepackage{cite}
% cite.sty was written by Donald Arseneau
% V1.6 and later of IEEEtran pre-defines the format of the cite.sty package
% \cite{} output to follow that of IEEE. Loading the cite package will
% result in citation numbers being automatically sorted and properly
% "compressed/ranged". e.g., [1], [9], [2], [7], [5], [6] without using
% cite.sty will become [1], [2], [5]--[7], [9] using cite.sty. cite.sty's
% \cite will automatically add leading space, if needed. Use cite.sty's
% noadjust option (cite.sty V3.8 and later) if you want to turn this off.
% cite.sty is already installed on most LaTeX systems. Be sure and use
% version 4.0 (2003-05-27) and later if using hyperref.sty. cite.sty does
% not currently provide for hyperlinked citations.
% The latest version can be obtained at:
% http://www.ctan.org/tex-archive/macros/latex/contrib/cite/
% The documentation is contained in the cite.sty file itself.






% *** GRAPHICS RELATED PACKAGES ***
%
\ifCLASSINFOpdf
  \usepackage[pdftex]{graphicx}
  % declare the path(s) where your graphic files are
  % \graphicspath{{../pdf/}{../jpeg/}}
  % and their extensions so you won't have to specify these with
  % every instance of \includegraphics
  % \DeclareGraphicsExtensions{.pdf,.jpeg,.png}
\else
  % or other class option (dvipsone, dvipdf, if not using dvips). graphicx
  % will default to the driver specified in the system graphics.cfg if no
  % driver is specified.
  % \usepackage[dvips]{graphicx}
  % declare the path(s) where your graphic files are
  % \graphicspath{{../eps/}}
  % and their extensions so you won't have to specify these with
  % every instance of \includegraphics
  % \DeclareGraphicsExtensions{.eps}
\fi
% graphicx was written by David Carlisle and Sebastian Rahtz. It is
% required if you want graphics, photos, etc. graphicx.sty is already
% installed on most LaTeX systems. The latest version and documentation can
% be obtained at: 
% http://www.ctan.org/tex-archive/macros/latex/required/graphics/
% Another good source of documentation is "Using Imported Graphics in
% LaTeX2e" by Keith Reckdahl which can be found as epslatex.ps or
% epslatex.pdf at: http://www.ctan.org/tex-archive/info/
%
% latex, and pdflatex in dvi mode, support graphics in encapsulated
% postscript (.eps) format. pdflatex in pdf mode supports graphics
% in .pdf, .jpeg, .png and .mps (metapost) formats. Users should ensure
% that all non-photo figures use a vector format (.eps, .pdf, .mps) and
% not a bitmapped formats (.jpeg, .png). IEEE frowns on bitmapped formats
% which can result in "jaggedy"/blurry rendering of lines and letters as
% well as large increases in file sizes.
%
% You can find documentation about the pdfTeX application at:
% http://www.tug.org/applications/pdftex





% *** MATH PACKAGES ***
%
%\usepackage[cmex10]{amsmath}
% A popular package from the American Mathematical Society that provides
% many useful and powerful commands for dealing with mathematics. If using
% it, be sure to load this package with the cmex10 option to ensure that
% only type 1 fonts will utilized at all point sizes. Without this option,
% it is possible that some math symbols, particularly those within
% footnotes, will be rendered in bitmap form which will result in a
% document that can not be IEEE Xplore compliant!
%
% Also, note that the amsmath package sets \interdisplaylinepenalty to 10000
% thus preventing page breaks from occurring within multiline equations. Use:
%\interdisplaylinepenalty=2500
% after loading amsmath to restore such page breaks as IEEEtran.cls normally
% does. amsmath.sty is already installed on most LaTeX systems. The latest
% version and documentation can be obtained at:
% http://www.ctan.org/tex-archive/macros/latex/required/amslatex/math/





% *** SPECIALIZED LIST PACKAGES ***
%
%\usepackage{algorithmic}
% algorithmic.sty was written by Peter Williams and Rogerio Brito.
% This package provides an algorithmic environment fo describing algorithms.
% You can use the algorithmic environment in-text or within a figure
% environment to provide for a floating algorithm. Do NOT use the algorithm
% floating environment provided by algorithm.sty (by the same authors) or
% algorithm2e.sty (by Christophe Fiorio) as IEEE does not use dedicated
% algorithm float types and packages that provide these will not provide
% correct IEEE style captions. The latest version and documentation of
% algorithmic.sty can be obtained at:
% http://www.ctan.org/tex-archive/macros/latex/contrib/algorithms/
% There is also a support site at:
% http://algorithms.berlios.de/index.html
% Also of interest may be the (relatively newer and more customizable)
% algorithmicx.sty package by Szasz Janos:
% http://www.ctan.org/tex-archive/macros/latex/contrib/algorithmicx/




% *** ALIGNMENT PACKAGES ***
%
%\usepackage{array}
% Frank Mittelbach's and David Carlisle's array.sty patches and improves
% the standard LaTeX2e array and tabular environments to provide better
% appearance and additional user controls. As the default LaTeX2e table
% generation code is lacking to the point of almost being broken with
% respect to the quality of the end results, all users are strongly
% advised to use an enhanced (at the very least that provided by array.sty)
% set of table tools. array.sty is already installed on most systems. The
% latest version and documentation can be obtained at:
% http://www.ctan.org/tex-archive/macros/latex/required/tools/


%\usepackage{mdwmath}
%\usepackage{mdwtab}
% Also highly recommended is Mark Wooding's extremely powerful MDW tools,
% especially mdwmath.sty and mdwtab.sty which are used to format equations
% and tables, respectively. The MDWtools set is already installed on most
% LaTeX systems. The lastest version and documentation is available at:
% http://www.ctan.org/tex-archive/macros/latex/contrib/mdwtools/


% IEEEtran contains the IEEEeqnarray family of commands that can be used to
% generate multiline equations as well as matrices, tables, etc., of high
% quality.


%\usepackage{eqparbox}
% Also of notable interest is Scott Pakin's eqparbox package for creating
% (automatically sized) equal width boxes - aka "natural width parboxes".
% Available at:
% http://www.ctan.org/tex-archive/macros/latex/contrib/eqparbox/





% *** SUBFIGURE PACKAGES ***
%\usepackage[tight,footnotesize]{subfigure}
% subfigure.sty was written by Steven Douglas Cochran. This package makes it
% easy to put subfigures in your figures. e.g., "Figure 1a and 1b". For IEEE
% work, it is a good idea to load it with the tight package option to reduce
% the amount of white space around the subfigures. subfigure.sty is already
% installed on most LaTeX systems. The latest version and documentation can
% be obtained at:
% http://www.ctan.org/tex-archive/obsolete/macros/latex/contrib/subfigure/
% subfigure.sty has been superceeded by subfig.sty.

%\usepackage{subimages}
%\setfigdir{figs}
%\usepackage[font=footnotesize]{subfig}
%\usepackage{caption}
%\usepackage{epstopdf}
%\usepackage{color}



%\usepackage[caption=false]{caption}
%\usepackage[font=footnotesize]{subfig}
% subfig.sty, also written by Steven Douglas Cochran, is the modern
% replacement for subfigure.sty. However, subfig.sty requires and
% automatically loads Axel Sommerfeldt's caption.sty which will override
% IEEEtran.cls handling of captions and this will result in nonIEEE style
% figure/table captions. To prevent this problem, be sure and preload
% caption.sty with its "caption=false" package option. This is will preserve
% IEEEtran.cls handing of captions. Version 1.3 (2005/06/28) and later 
% (recommended due to many improvements over 1.2) of subfig.sty supports
% the caption=false option directly:
%\usepackage[caption=false,font=footnotesize]{subfig}
%
% The latest version and documentation can be obtained at:
% http://www.ctan.org/tex-archive/macros/latex/contrib/subfig/
% The latest version and documentation of caption.sty can be obtained at:
% http://www.ctan.org/tex-archive/macros/latex/contrib/caption/




% *** FLOAT PACKAGES ***
%
%\usepackage{fixltx2e}
% fixltx2e, the successor to the earlier fix2col.sty, was written by
% Frank Mittelbach and David Carlisle. This package corrects a few problems
% in the LaTeX2e kernel, the most notable of which is that in current
% LaTeX2e releases, the ordering of single and double column floats is not
% guaranteed to be preserved. Thus, an unpatched LaTeX2e can allow a
% single column figure to be placed prior to an earlier double column
% figure. The latest version and documentation can be found at:
% http://www.ctan.org/tex-archive/macros/latex/base/



%\usepackage{stfloats}
% stfloats.sty was written by Sigitas Tolusis. This package gives LaTeX2e
% the ability to do double column floats at the bottom of the page as well
% as the top. (e.g., "\begin{figure*}[!b]" is not normally possible in
% LaTeX2e). It also provides a command:
%\fnbelowfloat
% to enable the placement of footnotes below bottom floats (the standard
% LaTeX2e kernel puts them above bottom floats). This is an invasive package
% which rewrites many portions of the LaTeX2e float routines. It may not work
% with other packages that modify the LaTeX2e float routines. The latest
% version and documentation can be obtained at:
% http://www.ctan.org/tex-archive/macros/latex/contrib/sttools/
% Documentation is contained in the stfloats.sty comments as well as in the
% presfull.pdf file. Do not use the stfloats baselinefloat ability as IEEE
% does not allow \baselineskip to stretch. Authors submitting work to the
% IEEE should note that IEEE rarely uses double column equations and
% that authors should try to avoid such use. Do not be tempted to use the
% cuted.sty or midfloat.sty packages (also by Sigitas Tolusis) as IEEE does
% not format its papers in such ways.





% *** PDF, URL AND HYPERLINK PACKAGES ***
%
%\usepackage{url}
% url.sty was written by Donald Arseneau. It provides better support for
% handling and breaking URLs. url.sty is already installed on most LaTeX
% systems. The latest version can be obtained at:
% http://www.ctan.org/tex-archive/macros/latex/contrib/misc/
% Read the url.sty source comments for usage information. Basically,
% \url{my_url_here}.


%*** TABLE PACKAGES (Inserido para a tabela de resultados) ***
\usepackage{booktabs}


% *** Do not adjust lengths that control margins, column widths, etc. ***
% *** Do not use packages that alter fonts (such as pslatex).         ***
% There should be no need to do such things with IEEEtran.cls V1.6 and later.
% (Unless specifically asked to do so by the journal or conference you plan
% to submit to, of course. )

% tirar na versão final
\usepackage{color}


% correct bad hyphenation here
\hyphenation{op-tical net-works semi-conduc-tor}


\begin{document}
%
% paper title
% can use linebreaks \\ within to get better formatting as desired

\title{Accelerating Curvature Estimate in 3D Seismic Data Using GPGPU}





% author names and affiliations
% use a multiple column layout for up to three different
% affiliations
\author{
\IEEEauthorblockN{\hspace{15mm}Leonardo Martins, Marco Aur\'elio Gon\c{c}alves da Silva, Marcelo Arruda, Joner Duarte Jr,  Pedro M\'ario Silva,\hspace{10mm} \\Roberto Beauclair Seixas, Marcelo Gattass}
\IEEEauthorblockA{Tecgraf/PUC-Rio\\
Rio de Janeiro\\
Email: \{lmartins, msilva, marruda, jduartejr, pmario, rbs, mgattass\}@tecgraf.puc-rio.br}
\and
\IEEEauthorblockN{\hspace{32mm} Paulo Souza}
\IEEEauthorblockA{\hspace{32mm} Petrobras\\
\hspace{32mm} Rio de Janeiro\\
\hspace{32mm} Email: prps@petrobras.com.br}
\and
\IEEEauthorblockN{Jairo Panetta}
\IEEEauthorblockA{ITA/IEC\\
S\~{a}o Jos\'e dos Campos\\
Email: panetta@ita.br}

}

% conference papers do not typically use \thanks and this command
% is locked out in conference mode. If really needed, such as for
% the acknowledgment of grants, issue a \IEEEoverridecommandlockouts
% after \documentclass

% for over three affiliations, or if they all won't fit within the width
% of the page, use this alternative format:
% 
%\author{\IEEEauthorblockN{Michael Shell\IEEEauthorrefmark{1},
%Homer Simpson\IEEEauthorrefmark{2},
%James Kirk\IEEEauthorrefmark{3}, 
%Montgomery Scott\IEEEauthorrefmark{3} and
%Eldon Tyrell\IEEEauthorrefmark{4}}
%\IEEEauthorblockA{\IEEEauthorrefmark{1}School of Electrical and Computer Engineering\\
%Georgia Institute of Technology,
%Atlanta, Georgia 30332--0250\\ Email: see http://www.michaelshell.org/contact.html}
%\IEEEauthorblockA{\IEEEauthorrefmark{2}Twentieth Century Fox, Springfield, USA\\
%Email: homer@thesimpsons.com}
%\IEEEauthorblockA{\IEEEauthorrefmark{3}Starfleet Academy, San Francisco, California 96678-2391\\
%Telephone: (800) 555--1212, Fax: (888) 555--1212}
%\IEEEauthorblockA{\IEEEauthorrefmark{4}Tyrell Inc., 123 Replicant Street, Los Angeles, California 90210--4321}}




% use for special paper notices
%\IEEEspecialpapernotice{(Invited Paper)}




% make the title area
\maketitle


\begin{abstract}
%\boldmath
Seismic interpretation is a vital step in oil and gas industry. Choosing proper drilling locations is a major challenge to the interpreters, since an ultra-deep water oil well located below 2500 meters of water can cost dozens of millions of dollars. Volumetric curvature attributes are widely used to visualize folds, faults, among other key structures that define a possible reservoir. However, volumetric curvature estimate is very compute-intensive and can take several hours. The main goal of this paper is to present a GPGPU implementation that perform volumetric curvature estimate at interactive real-time, for a single volume slice.  We show an implementation that maximizes memory access, loading necessary data to GPU shared memory using a circular buffer. The most compute demanding kernel achieved 56\% of GPU peak performance and 1.676 instructions per clock out of theoretical maximum 2. Our results show an average speed-up of 12 times compared to CPU with OpenMP. In addition, the application fits really well on GPUs, due to the high number of registers available plus programmable cache (CUDA shared memory). The GPU performance gains enabled on-the-fly calculations during visualization at interactive real-time, instead of waiting time of hours for the whole volume.
\end{abstract}

\IEEEpeerreviewmaketitle



\section{INTRODUCTION}

Seismic interpretation is a vital step in oil and gas industry. An ultra-deep water oil well located below 2500 meters of water can cost dozens of millions of dollars, so choosing proper drilling locations is a big challenge to the interpreters.

In this context, seismic attributes can provide important information to the interpreters about geometry and physical properties of subsurface in study, highlighting structural and stratigraphic features that were not evident in the original survey. Thus, such attributes play an important role in the generation and characterization of geologic models for areas of interest.

In recent years, volumetric curvature attributes have been featured as important tools for imaging and prediction of subtle fractures, faults, channels, among other features. These seismic attributes provide, for each sample of the input data volume, important geometric information about the local surface around the sample. Thus, volumetric curvature attributes may aid interpreters to delineate subtle stratigraphic features, as well as small-scale fracturing, and their analysis can be used as a powerful tool for structural and stratigraphic interpretation \cite{martins}. Maximum and minimum curvatures are the most useful attributes to delineate faults and flexures, due to fact that these measures show more continuity and present the same polarity along geologic features. In addition, several others interesting curvature attributes can be calculated from these two measures, such as curvedness and shape index \cite{martinsthesis}.

Although seismic attributes are useful for interpreters, its implementation can be very compute-intensive. For huge amount of input data, e.g. volumes of dozens of GB, the time spent only on parameter testing may be prohibitive. Also, a continuous increasing of size in three-dimensional seismic data has been noticed in the past decades. Currently, in order to generate useful seismic attributes from these large amounts of data, a big computational time may be required, even in high performance workstations. Hence, in seismic attribute research, the search for new technologies capable to accelerate processing speed, and consequently reduce processing time, is a great challenge.

This work aims to present a GPGPU implementation of a method to estimate volumetric curvature attributes at interactive real-time. The method implemented in this paper is proposed by \cite{martins}. Multi-spectral curvature results can be obtained through the variation of derivative operator size. We compare processing time and speed-up gain for these implementations using several derivative operator sizes.

The proposed GPGPU implementation reduces memory accesses by a circular buffer at shared memory. We also present an interactive approach that calculate the attributes only in the visible seismic section, such that results can be obtained during visualization at interactive real-time, even for volumes larger than the available memory (which is common in seismic data).

The contribution of this paper comprises GPGPU and CPU optimization techniques in the task of interactive volumetric curvature estimate attributes in seismic data, using a mathematical approach that is faster than previous curvature estimate methods \cite{martinsthesis}. The method used in this work fits well on stencil computation domain, which allows the use of several parallel optimization techniques. In addition, our GPU implementation performs stencil data reuse with circular buffer, which reduces memory access around the stencil points, using shared memory. For visualization purposes, our implementation achieves interactive real-time for a single curvature volume section.

This paper is organized as follows. Section \ref{sec:work} describes several previous works existing in literature, related to seismic attributes and high performance computing. Section \ref{sec:method} explains the curvature attribute method implemented in this work. Sections \ref{sec:cpu} and Section \ref{sec:gpu} describe technical details about CPU and GPU implementations, respectively. Results of our experiments are presented in Section \ref{sec:results}. Finally, Section \ref{sec:conclusions} presents some conclusion remarks.

\section{RELATED WORK} \label{sec:work}

The computation of seismic attributes (envelop and its derivatives, phase, frequency and Q Factor) accelerated by GPU is presented in the work of Zhang et al. \cite{zhang}. The GPU implementation make each thread responsible for process one seismic trace, so the parallel computing is realized among different seismic traces. The author also compare the computational performance of CPU and GPU and show that GPU is about 6 times faster.

An interactive seismic fault detector that use a nonlinear set of filters implemented in GPU is presented by \cite{jeong}. The authors estimate local orientation through 3D structure tensors, which are used to guide an anisotropic diffusion filter. This filter reduces noise in the data while enhances fault discontinuities and reflectors' coherence. Next, a fault-likelihood volume is computed using a directional variance measure and fault samples are then extracted through a non-maximal-suppression method. Also, the authors show how the proposed algorithms are implemented with a GPU programming model, and compare it with a CPU implementation.

Volumetric curvature attributes in seismic data were proposed by \cite{dossary}. The authors demonstrate that volumetric curvature estimate can be obtained through dip volume derivatives. The use of fractional derivative operators allows a multi-spectral approach, highlighting features at different scales. In this approach, dip volumes are estimated through a local search for best correlation in semblance volume, and this is a very costly computational step. Therefore, a larger search range can further increase the processing time.

%In \cite{panetta}, the authors describe the computational characteristics of the current Kirchhoff prestack seismic migration used in production by Petrobras. The application presented in the work has parallel scalability tested up to 8192 processors on the IBM Blue Gene without exhausting parallelism. Production load comprises thousands of jobs per year, consuming the installed park of a few thousand x86 CPU cores, with top production runs continuously using up to 1000 dedicated processors during 20 days. Also, job performance data are automatically  produced and stored by a built in mechanism, allowing single job performance analysis and multi job performance statistics. The authors demonstrate that the portability to quad-core x86 and Sony PlayStation 3 achieved very high price/performance and performance/watt gains over single core x86 machines. \textbf{COMENTARIO DO PANETTA: "Me parece que o trabalho citado não tem nada a ver com o tópico deste paper."}

In \cite{nguyen}, the authors propose a 3.5D blocking algorithm (2.5D spatial blocking and an additional temporal blocking). The 2.5D spatial blocking blocks in two dimension and streams through the third dimension, which increases the blocking size and results in better utilization of the on-chip memory. The authors show that the resultant algorithm is suitable to both thread-level and data-level parallelism, and fits well with SIMD width and multiple cores. The 3.5D blocking algorithm is applied in two examples: a 7-point stencil for 3D grids and in a Lattice Boltzmann method (LBM). 

The work of \cite{shaheen} argues that the effectiveness of temporal blocking depends strongly on the tiling scheme, which must account for the contradicting goals of spatio-temporal data locality, regular memory access patterns, parallelization into many independent tasks, and data-to-core afﬁnity for NUMA-aware data distribution. Despite the prevalence of cache coherent non-uniform memory access (ccNUMA) in nowadays many-core systems, this latter aspect has been largely ignored in the development of temporal blocking algorithms. Building upon previous cache-aware and cache-oblivious schemes, this paper develops their NUMA-aware variants, explaining why the incorporation of data-to-core affinity as an equally important goal necessitates also new tiling and parallelization strategies. Results are presented on an 8 socket dual-core and a 4 socket oct-core systems and compared against an optimized naive scheme, various peak performance characteristics, and related schemes from literature.

In \cite{dursun}, several in-core optimization techniques to high-order stencil computations are tested, including cache blocking for efficient L2 cache use, register blocking and data-level parallelism via single-instruction multiple-data (SIMD) techniques to increase L1 cache efficiency, and software prefetching techniques. The generic approach is tested with a kernel extracted from a 6th-order stencil based seismic wave propagation code on a suite of Intel Xeon architectures. Cache blocking and prefetching techniques are found to achieve modest performance improvement, whereas register blocking and SIMD implementation reduce L1 cache line miss dramatically accompanied by moderate decrease in L2 cache miss rate. Optimal register blocking sizes are determined through analysis of cache performance of the stencil kernel for different sizes of register blocks, thereby achieving over 4.3-fold speed-up on Intel Harpertown. The authors also examine lower precision (3rd, 4th, and 5th orders) stencil computations to analyze the dependency of data-level parallel efficiency on the stencil order.

\section{METHOD} \label{sec:method}

The approach of \cite{martins} proposes a method for estimating volumetric curvature attributes in post-stack amplitude data, using the mathematical support provided by differential geometry.

The method proposes to take into account the particular nature of this kind of data. The experiments performed in previous works \cite{silva} indicate that amplitude gradient does not provide a consistent estimate of the local orientation. Due their oscillatory nature, amplitude data presents a large lateral variation along the horizon, even locally. In other words, seismic horizons are not iso-surfaces in amplitude volumes.

\begin{figure*}[ht!]
  \centering
  \includegraphics[width=5in]{method.png}
  \caption{Curvature estimate method}
  \label{fig:method}
\end{figure*}

Therefore, it is proposed a pre-processing step, the computation of a horizon identifier attribute, which properly represents seismic horizons as level surfaces. The gradient of such attribute can provide a consistent estimate of the normal field. From this point, the normal field obtained can be used to compute volumetric curvature attributes. The authors proposed three horizon identifier attributes: instantaneous phase, vertical derivative and ridge/valley attribute. In this work we implemented only vertical derivative, which consists simply in vertical variation along seismic trace. For vertical derivative computation, we use a 3x3x11 gaussian derivative operator. The computation using others horizon identifier attributes will be addressed in future works.

Generally, the method is based on three principal steps (Figure \ref{fig:method}). Firstly, seismic reflectors are properly described as level surfaces, through the computation of a horizon identifier attribute. Secondly, normal fields along X, Y and Z directions are estimated based on the gradient of this attribute. Finally, normal field partial derivatives are calculated in order to find desired volumetric curvature attributes, using a differential geometry approach.

In short, the differential geometry approach used by \cite{martins} proposes the use of curvature formulas for implicit surfaces in order to obtain volumetric curvature from horizon identifier attributes.

Let $F(x,y,z) = 0$ be an implicit surface, $\nabla{F}$ the gradient vector and $H(F)$ the hessian matrix at a given point. In this case, we have:

\begin{equation} \label{eq:notation}
\begin{array}{cc}
\nabla{F} =  \left(\frac{\partial F}{\partial x} \mbox{  } \frac{\partial F}{\partial y} \mbox{  } \frac{\partial F}{\partial z} \right) = (F_x \mbox{ } F_y \mbox{ } F_z), \\\\
H(F) = \left(\begin{array}{rrr} \frac{\partial^2 F}{\partial x^2} \mbox{  } &  \frac{\partial^2 F}{\partial x \partial y} \mbox{  } & \frac{\partial^2 F}{\partial x \partial z}\\
				\frac{\partial^2 F}{\partial y \partial x} \mbox{  } &  \frac{\partial^2 F}{\partial y^2} \mbox{  } & \frac{\partial^2 F}{\partial y \partial z} \\
				\frac{\partial^2 F}{\partial z \partial x} \mbox{  } &  \frac{\partial^2 F}{\partial z \partial y} \mbox{  } & \frac{\partial^2 F}{\partial z^2} \end{array} \right) = \\\\ \left(\begin{array}{rrr} F_{xx} \mbox{ } & F_{xy} \mbox{ } & F_{xz} \\
					   F_{yx} \mbox{ } & F_{yy} \mbox{ } & F_{yz} \\
					   F_{zx} \mbox{ } & F_{zy} \mbox{ } & F_{zz} \end{array} \right) = \nabla{(\nabla{F})}
\end{array}
\end{equation}


To properly represent normal orientation along implicit surfaces and curvature signal convention, it is necessary to change the gradient according to its $z$ component signal:

\begin{equation}
N(F)=\left\{\begin{array}{rc}
\nabla{F},&\mbox{se}\quad F_z\ge 0,\\
-\nabla{F},&\mbox{se}\quad F_z < 0,\\
\end{array}\right.
\end{equation}

Thus, we can define an adapted hessian matrix $H^*(F)$ \cite{martinsthesis}, by the following expression:

\begin{equation} \label{eq:novo}
\begin{array}{cc}
N(F) = (N_x \mbox{ } N_y \mbox{ } N_z),\\\\
H^*(F) = \left(\begin{array}{rrr} \frac{\partial N_x}{\partial x} \mbox{  } &  \frac{\partial N_x}{\partial y} \mbox{  } & \frac{\partial N_x}{\partial z}\\
				\frac{\partial N_y}{\partial x} \mbox{  } &  \frac{\partial N_y}{\partial y} \mbox{  } & \frac{\partial N_y}{\partial z}\\
				\frac{\partial N_z}{\partial x} \mbox{  } &  \frac{\partial N_z}{\partial y} \mbox{  } & \frac{\partial N_z}{\partial z}\\ \end{array} \right)
\end{array}
\end{equation}


At this point, gaussian curvature $k_G$ can be obtained using the following expression

\begin{equation}\label{eq:kG}
k_G =  \frac{ \left|\begin{array}{rr} H^*(F) & N(F)^T \\ N(F) & 0 \end{array} \right|} {|N(F)|^4}
\\
\end{equation}

and mean curvature $k_M$ is given by:

\begin{equation}\label{eq:kM}
k_M =  \frac{ N(F) * H^*(F) * N(F)^T - |N(F)|^2Trace(H^*)} {2|N(F)|^3}
\\
\end{equation}

Once these two measures are defined for a given point, we can obtain maximum and minimum curvatures,  $k_1$ and $k_2$, by the classic equation

\begin{equation}
k_1,k_2 = k_M \pm \sqrt{k^2_M - k_G}
\end{equation}


In order to obtain gradient vector and partial derivatives, gaussian derivative operators provide a smoothed estimate. Also, different derivative operator sizes increase or decrease curvature wavelength imaging. Long spectral wavelength curvature may be of great value in visualizing subtle features such as folds, flexures, collapse features, among others \cite{dossary}. However, sometimes input data is subject to high levels of noise, or interpreters just want to look at main features in data, so in these cases short spectral wavelength curvature is more indicated.

In practice, the main computational task is performed through convolution of gaussian derivative filters. Therefore, this method has the advantage that a filter based on convolution can be straightly formulated in a parallel approach.

Curvature attributes estimate is the final and most compute-intensive step. Indeed, it involves, for each voxel, the computation of a 4x4 determinant (Equation \ref{eq:kG}), composed by matrix $H^*(F)$, normal vector $N(F)$ and the last element, zero. Also, the 9 partial derivatives of  $H^*(F)$ are obtained through convolution of normal field volumes with gaussian derivative filters.

\section{CPU Implementation} \label{sec:cpu}

While parallelization techniques were applied in our implementation to use all available cores in the processor, the in-core level optimization techniques, such as cache blocking allowed exploitability of flops performance.

Each step walks through the volume, using one loop for each dimension (inline, crossline and time). Each voxel is computed based in a kernel whose dimension depends of the derivative operator size. In order to perform convolution, we need three more loops. In other words, the total amount of computation for one voxel is operatorX x operatorY x operatorZ x step computation.

OpenMP programming is straightforward in this application. The outer loop was parallelized, dividing the work in different threads. Each thread process a subset of the outer loop, reducing OpenMP overhead to a minimum. Since voxels are processed independently in each thread, only the kernels and input/output volumes are shared. Load is well balanced over OpenMP threads, due to the homogeneous computation over voxels. Threads have independent memory access patterns. Cache was reused, minimizing memory access pressure, that usually increases with OpenMP threads. Multiple OpenMP loop scheduling options was used with negligible gains.

Since the method have three steps based on convolution operators, we can rely on stencil computation  \cite{dursun} to maximize cache reuse. Stencil computation is often used in fluid simulation problems and in numerical analysis to solve partial differential equations. One of the biggest challenge of stencil computation is the bandwidth-to-compute requirement that is often very high, due to the large amount of data needed for few calculation \cite{nguyen}.

Although most implementations of stencil computation access neighbors  in a cross pattern, our implementation uses a 3D grid shape to obtain better continuity of seismic features on the final result (Figure \ref{fig:kernel}).

\begin{figure}[h!]
  \centering
  \includegraphics[width=\columnwidth]{kernel_graph_noaxis.pdf}
  \caption{ Grid showing the data dependency of a 3x3x3 stencil computation operator.
  In this case we have the red sphere representing the voxel of the volume that will be processed and
  the blue sphere represents the neighbors voxels that will be used in the calculation.
  Spheres with darker shades of blue are closer to the kernel center. }
  \label{fig:kernel}
\end{figure}

Both Intel C compiler and gcc vectorized some loops. However, they did not vectorize the hot spot on the third step, and we think a manual outer loop vectorization with intrinsics will be too much work. The other limiting factor for vectorization is the fact that each point of stencil requires 16 scalar properties to find a 4x4 matrix determinant. The AVX instruction is known to have only 16 vector registers that leads to register spilling since we need to store 16 properties. AVX-512 \cite{avx} with 32 vector registers can reduce the register pressure.

Cache block optimization was used to split the problem in blocks of 4x4x32 and parallelized in the number of blocks, and with it, we obtained a gain of 14\%.

We did not make any NUMA optimizations \cite{shaheen} such as processor affinity and first touch memory initialization because our client machines are only single socket.

%Reusar a frase depois
%Stencil computations are often memory bandwith bound when the collective data for all grid points exceeds cache size.

\section{GPU Implementation} \label{sec:gpu}

Stencil computations have been successfully implemented on GPUs \cite{micikevicius}, due to the localized nature of stencil computation (nearest neighbor interaction and streaming data accesses). In addition, the GPUs massively parallel architecture can greatly benefit of the fact that seismic data are generally large.

GPUs do not rely on fancy out of order execution or pre fetches, instead it schedules lots of independent instructions to hide both pipeline and memory latencies. Other great features of GPUs are the constant memory and the shared memory \cite{micikevicius}\cite{ruetsch}, which is a user controlled cache. The shared memory bandwidth is one order of magnitude larger than GDDR memory (global memory), and it has no performance penalties for unaligned stencil accesses, e,g: accessing neighbors in x dimension (x is the fastest dimension in memory).

Each of the three steps of the curvature method was implemented in a different CUDA kernel using blocks of 32x8 threads. To perform the convolution calculation of the three curvature steps, we could launch a thread for each sample of the target volume. That would be the straight implementation of the parallelization of the method. However, after some experiments we realized that processing a line of samples in each thread showed up being a lot more efficient on the GPU due to memory access optimizations.

In order to maximize performance we schedule blocks of 256 threads and each thread unrolled the inner most loop to dispatch a lot of independent instructions. By definition all CUDA kernels are vectorized, the programmer does not need to code using vector intrinsics but must be aware that the code is going to be vectorized under the hood. In addition, we pre-compute the stencil computation operator and store it into constant memory.

The memory access optimization is given by changing the order of the access. As we sweep through the volume we can vary the index of the voxels for the three dimensions. However, when we walk in the x dimension, which is relative to the \emph{inline} axis, the physical shift in the memory address yield to an overhead due to high latency of this access which stalls the pipeline process. By changing the direction we walk through the volume, we can access addresses more contiguously and achieve better performance by launching the threads in the plane \emph{crossline} x \emph{time} instead of the plane \emph{inline} x \emph{crossline}. This optimization benefits directly the three steps of the method since the access to neighbor voxels is faster.

When we compute a set of lines, two extra lines are load to shared memory, in this way when the next set of lines will be computed, these lines are directly accessible in shared memory, reducing the memory address translation misses.

The first and second algorithm steps need to allocate 4 volumes in the memory. The first step uses the input volume to generate horizon identifier volume. Next, in the second step, the algorithm generates 3 normal volumes, one for each direction x, y and z. Generally, GPUs has less than 4GB memory size. In this context, only volumes with a maximum of 1GB could be processed.

Due to the fact that a seismic volume commonly has more than 100 GB, to process
this amount of data we need to split the input data in sub volumes according
with GPUs memory and merge all sub volumes after computation. Processing volume
chunks the CPU/GPU memory transfers can be easily overlapped with kernel executions since
computation time is much bigger than transfer time, but understanding the visualization
process of seismic volumes we could restrict the computation to process only the visible data.

The visualization of seismic volumes is usually performed by a set of 2D sections in the whole
3D data and the analyses is performed by moving a slice across the volume. Therefore, instead of computing the curvature attribute for the whole volume and let the interpreter
interact with the result volume in memory, we propose to process only the visible slice,
computing the curvature attribute in real-time.

Using this strategy, computation of the visible slice requires only loading neighbor slices.
The number of neighbors is defined by the sum of the operator size in the slice direction
for each step. For example, an inline slice with a 5x5x5 derivative operator size needs 10
neighbor slices (2 for the first step, 4 for the second step e 4 more for the third step).
In this case, the sub volume size used to compute only one slice will be much smaller,
thus faster to process.

On the GPU, the maximum performance is only achieved if you keep everything in registers, registers are the fasted storage on GPUs with a peak of bandwidth of 10TB/s (1331 flops $\rightarrow$ 16 bytes per multiply and add $\rightarrow$ 3 loads 1 store)  on Tesla M2090 \cite{nvidia}.

One of the great features of the GPUs is the high number of registers, in theory we can keep all 15 properties in registers, we checked the number of registers used using nvcc. The nvidia compiler
shows the number of registers used by each kernel and if you are running out of registers going to GDDR memory. In our case, the compiler generated the kernel using 60 registers with no spills to
slower memory.

We maximize data reuse using a 3D circular buffer around the stencil points using shared memory for the curvature estimate step. To process a single voxel we need, for example, a 5x5x5 region. Thus we load, before the loop, four planes and for each new plane the $iz + 2$ overwrites the $iz - 2$ old plane. Figure \ref{fig:circular_buffer} shows how circular buffers works. The implementation overview can be seen on Figure \ref{fig:overview}.


\begin{figure}
  \centering
  \includegraphics[width=\columnwidth]{circular_buffer_layers_smaller.pdf}
  \caption{Circular buffer on shared memory. $z$ is the slowest dimension. The next iteration will overwrite the red plan }
  \label{fig:circular_buffer}
\end{figure}

\begin{figure}
  \centering
  \includegraphics[width=\columnwidth]{overview.pdf}
  \caption{ GPU Implementation Overview. The small blocks inside the volume in the three steps represents the stencil computer (SC) operators. The yellow block in the curvature step represents the circular buffer. }
  \label{fig:overview}
\end{figure}


\section{RESULTS} \label{sec:results}

The algorithm was implemented in a beta version of v3o2, an application for Seismic Visualization and Interpretation used in Petrobras. We executed the algorithm using different sizes of the derivative operator filter for the sequential approach running on the CPU and for the parallel approach both on CPU and GPU. We tested the performance on the i7 3970x CPU (6 cores) with 24GB of RAM and a Geforce GTX 580 GPU (512 CUDA cores). GPU times include device initialization, memory allocation/deallocation and transfers.

The resultant curvature for a 32 bits volume with 244MB (291 inline, 476 crossline and 462 time slices) is presented in Figure \ref{fig:horizonResults}. The computational cost is evaluated in Table \ref{table:volumeresults}. For the 5x5x5 operator size, which is a value commonly used by interpreters, the curvature volume is obtained in nearly 0.5 second by GPU implementation with a speed-up of 11.2 times in comparison to CPU implementation with OpenMP (12 threads). For the largest derivative operator size (17x17x17) the GPU achieves a speed-up of 114.2 times in relation to CPU sequential execution time and a speed-up of 8.63 times in comparison to CPU with OpenMP (12 threads).

Best GPU performance was achieved using 3D shared buffer implementation for 3x3x3 and 5x5x5 operators. However, due to memory limitation, large operators size were performed using a 2D shared buffer implementation.

Table \ref{table:gpucomparison} shows the gains using 2D and 3D shared buffers. As already mentioned the use of 3D shared buffers is limited by the amount of shared memory available at GPU, which restricts the use of larger operator sizes. For 5x5x5 operator size, we can perceive a small speed-up of $1.09$ with 3D shared buffer implementation, in comparison with 2D shared buffer.

% Booktabs require to add \usepackage{booktabs} to your document preamble
\begin{table}[h]
\begin{center}
\caption{Time comparison processing the curvature method on CPU sequentially, CPU with OpenMP and GPU.}
\label{table:volumeresults}
\begin{tabular}{@{}cccc@{}}
\toprule
Operator size & \begin{tabular}[c]{@{}c@{}}CPU sequential\\  time (s)\end{tabular} & \begin{tabular}[c]{@{}c@{}}CPU with OpenMP\\ time (s)\end{tabular} & \begin{tabular}[c]{@{}c@{}}GPU\\ time (s)\end{tabular} \\ \midrule
3 x 3 x 3     & 26.68                 & 3.91                         & 0.31       \\ \midrule
5 x 5 x 5     & 55.84                 & 6.75                         & 0.55       \\ \midrule
7 x 7 x 7     & 125.25                & 15.39                        & 1.42       \\ \midrule
11 x 11 x 11  & 446.23                & 53.49                        & 3.79       \\ \midrule
17 x 17 x 17  & 1586.15               & 119.84                       & 13.88      \\ \bottomrule
\end{tabular}
\end{center}
\end{table}


\begin{figure*}[ht!]
  \centering
  \includegraphics[width=5in]{results_map_3.png}
  \caption{Volumetric curvature attribute $k_1$ mapped along an tracked horizon, using 5x5x5 (a), 7x7x7 (b), 11x11x11 (c) and 17x17x17 (d) derivative operator sizes. As the operator size increases, subtle details trend to disappear, and only main structural features remains on final result.}
  \label{fig:horizonResults}
\end{figure*}

% Booktabs require to add \usepackage{booktabs} to your document preamble
\begin{table}[h!]
\begin{center}
\caption{Time comparison on GPU times and the optimizations implemented.}
\label{table:gpucomparison}
\begin{tabular}{@{}cccc@{}}
\toprule
Operator size & \begin{tabular}[c]{@{}c@{}}GPU without \\ shared buffer \\  time (s)\end{tabular} & \begin{tabular}[c]{@{}c@{}}GPU with \\ 2D shared buffer\\ time (s)\end{tabular} & \begin{tabular}[c]{@{}c@{}}GPU with \\ circular 3D \\ shared buffer\\ time (s)\end{tabular} \\ \midrule
3 x 3 x 3     & 0.32                     & 0.32                    & 0.31          \\ \midrule
5 x 5 x 5     & 0.66                     & 0.60                    & 0.55          \\ \midrule
7 x 7 x 7     & 1.54                     & 1.42                    & -          \\ \midrule
11 x 11 x 11  & 4.65                     & 3.79                    & -          \\ \midrule
17 x 17 x 17  & 15.57                    & 13.88                   & -         \\ \bottomrule
\end{tabular}
\end{center}
\end{table}

% Booktabs require to add \usepackage{booktabs} to your document preamble
\begin{table}[h!]
\begin{center}
\caption{Time comparison processing inline slices on CPU and GPU.}
\label{table:sliceresults}
\begin{tabular}{@{}ccccc@{}}
\toprule
Operator size & \begin{tabular}[c]{@{}c@{}}Number \\of slice\\  requireds\end{tabular} & \begin{tabular}[c]{@{}c@{}}CPU \\ with OpenMP\\ time (ms)\end{tabular} & \begin{tabular}[c]{@{}c@{}}GPU \\  optimized\\ time (ms)\end{tabular} & \begin{tabular}[c]{@{}c@{}} Memory transfer\\ host  $\leftrightarrow$ device \\ time (ms)\end{tabular}\\ \midrule
3 x 3 x 3     &          7           &            570          &        10     &     6.5  \\ \midrule
5 x 5 x 5     &          11          &            790          &        18     &     10  \\ \midrule
7 x 7 x 7     &          15          &            920          &        31     &     14  \\ \midrule
11 x 11 x 11  &          23          &           1220          &        89     &     21  \\ \midrule
17 x 17 x 17  &          35          &  	     2130		   &        570    &     32  \\ \bottomrule
\end{tabular}
\end{center}
\end{table}

Since the algorithm uses at least 4x the volume memory to calculate the curvature attribute, the maximum volume size to use on each run is 750MB (considering GTX 580 has a global memory of 3GB).

To evaluate the slice approach, we use a 32 bits volume with 1.1 GB (581 inline, 951 crossline and 462 time slices). The performance is evaluated in Table \ref{table:sliceresults}. The measures indicates that the computation of an inline slice requires less memory and can be performed in real-time, allowing interactive manipulation using operator sizes from 3x3x3 to 7x7x7. Although we used pinned memory to hold the volume data, 45\% to 65\% of the time for these operators are spent with memory transfers between host and device.

The method implemented was profiled with NVIDA profiler and the most compute demanding kernel achieved 56\% of peak performance in GFlops and 1.676 instructions per cycle out of theoretical maximum 2. 

%achieved 56\% of GPU peak performance and 1.676 instructions per clock out of theoretical maximum 2. 

\section{CONCLUSIONS} \label{sec:conclusions}

Curvature attributes can provide interesting information for interpreters in the task of seismic features delineation. Such geometric attributes can highlight key structures that define a possible reservoir.

This paper examined parallel approaches on CPU and GPU in order to reduce response time to estimate these compute intensive attributes. The main computational efforts performed by  the method implemented in this paper are convolutions with gaussian derivative operators, which allows the use of stencil computation techniques to improve performance. All optimizations presented in this paper can also be applied to other problems using stencil computation. 

Our experiments show that curvature estimate time can be dramatically reduced using a GPGPU implementation and it can even make possible the process of one slice at interactive time, which allows the user to sweep through the entire volume searching for specific information helped by the curvature attribute. Using GPU implementation, we obtained an average speed-up of 12 times compared to CPU with OpenMP.

Planned future work comprises reformulate the method to apply it in the frequency domain using the GPU, in order to obtain a better performance than the current one. Also, we plan to analyze the performance using the Intel MIC architecture.


%\subsection{FUTURE WORKS} \label{sec:future}


\section*{Acknowledgment}


The authors would like to thank Petrobras for the research opportunity and for the permission to publish this work.


\bibliographystyle{IEEEtran}
\bibliography{example}

% that's all folks
\end{document}
EOT;

file_put_contents("latex/temp/main.tex", $latex); file_put_contents("latex/temp/IEEEtran.cls", file_get_contents("latex/IEEEtran.cls"));

var_dump(exec("cd /home/user/pleroma/test/scielo/latex/temp; xelatex main.tex"));
}

}

$latex = new latex();

