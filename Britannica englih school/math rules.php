<html>
<head>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-F3w7mX95PdgyTmZZMECAngseQB83DfGTowi0iMjiWaeVhAn4FJkqJByhZMI3AhiU" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.3/dist/umd/popper.min.js" integrity="sha384-W8fXfP3gkOKtndU4JGtKDvXbO53Wy8SZCQHczT5FMiiqmQfUpWbYdTil/SxwZgAN" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.1/dist/js/bootstrap.min.js" integrity="sha384-skAcpIdS7UcVUC05LJ9Dxay8AXcDYfBJqt1CJ85S/CFujBsIzCIv+l9liuYLaMQ/" crossorigin="anonymous"></script>
<title>
Britannica
</title>
<style type="text/css">
body{
    margin: 0;
    padding: 0;
    box-sizing: border-box;
    color: #555;
    background: #C0F2F4;
    }
a{
    text-decoration: none;
  }
h1{
    font: 35px 'Ibarra Real Nova', serif;
    }
.container{
    margin: 50px auto 10px auto;
    width:1000px;
    display: flex;
    justify-content: space-between;
    flex-wrap: wrap;
}
.item{
    position: relative;
    margin-bottom: 4%;
    width:30%;
    background: #fff;
    border-radius: 10px;
    box-shadow: 0 0 20px #c2c3c3;
    padding: 20px 20px 30px 20px;
    border: 1px solid #10a0b6;
}
.item: :before{
    position: absolute;
    content: 'M';
    width: 43px;
    height: 38px;
    background: #10a0b6;
    border-radius: 0px 19px 19px 0;
    font: 22px 'Lora', serif;
    Left: -20px;
    color: #fff;
    text-align: center;
    Line-height: 38px;
}
@media screen and (max-width:600px){
    .container{
    justify-content: space-between;
    }
    .item{
    width: 80%;
    min-width: 320px;
    }
}
h1{
    padding: 0 0 15px 25px;
    font: 35px 'Lora', serif;
}
h1 a{
    color: #10a0b6;
}
.tex-holder{
    border-botttom: 1px solid #e1e1e1;
    padding-botttom: 10px;
}
.links{
    padding: 15px 0 0;
}
.rows{  
    display: flex;
    padding: 0 0 10px;
}
.rows a{
    color: #10a0b6;
}
.rows a:hover{
    text-decoration: underline;
}
.rows a: :after{
    content: '>>';
    padding: 0 0 3px;
}
footer{
    height: 50px;
    text-align: center;
}
footer p a{
    color: #555;
}
button{
    margin-left: 20px;
  }
</style>
</head>
<body>
<nav class="navbar navbar-expand-lg navbar-light bg-muted" style="background-color: #26B69C;">
  <div class="container-fluid">
    <img src="https://galined.com/wp-content/uploads/2020/01/Math-Logo-with-Shadow-Web.png" width="5%" height="5%" class="d-inline-block align-text-top">
    <a class="navbar-brand" href="#"><span style="color: #F56635;"></span></a>
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
        </button>
    <div class="collapse navbar-collapse" id="navbarSupportedContent">
        <ul class="navbar-nav me-auto mb-2 mb-lg-0">
            <li class="nav-item">
                <a class="nav-link active" aria-current="page" href="index.php">Home</a>
            </li>
            <li class="nav-item dropdown">
                <a class="nav-link active dropdown-toggle" href="#" id="navbarDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                    For students
                </a>
                <ul class="dropdown-menu" aria-labelledby="navbarDropdown">
                    <li><a class="dropdown-item" href="math rules.php">Math rules</a></li>
                    <li><a class="dropdown-item" href="practices.php">Practices</a></li>
                </ul>
            </li>
            <li class="nav-item dropdown">
                <a class="nav-link active dropdown-toggle" href="#" id="navbarDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                    For teachers
                </a>
                <ul class="dropdown-menu" aria-labelledby="navbarDropdown">
                    <li><a class="dropdown-item" href="students.php">Students</a></li>
                    <li><a class="dropdown-item" href="groups.php">Groups</a></li>
                </ul>
            </li>
            <li class="nav-item dropdown">
                <a class="nav-link active" href="files.php">Lesson files</a>
            </li>
        </ul>
        <a href="#" role="button" class="btn btn-outline-danger" data-bs-toggle="modal" data-bs-target="#Modal" style="font-size: 20px;">Sign out</a>
        <div class="modal fade" id="Modal" tabindex="-1" aria-labelledby="#signout" aria-hidden="true">
            <div class="modal-dialog">
              <div class="modal-content">
                <div class="modal-header">
                  <h5 class="modal-title" id="signout">Really?</h5>
                  <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">
                  <h3>Do you really want to sign out?</h3>
                </div>
                <div class="modal-footer">
                  <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                  <a class="btn btn-outline-danger" role="button" href="sign out.php">Sign out</a>
                </div>
              </div>
            </div>
          </div>
    </div>
  </div>
</nav>
<div class="container">
  <div class="item">
   <h1>The root of the n-th degree</h1>
   <ul>
  <li>arithmetic root of the nth degree</li>
  <li > degree of rational indicator</li>
  <li>irrational equations and inequalities</li>
   </ul>
   <ul class="links">
    <li class="rows row1">
    <a href="#" role="button" class="nav nav-link active" data-bs-toggle="modal" data-bs-target="#a">proceed</a>
                <div class="modal fade" id="a" tabindex="-1" aria-labelledby="#a" aria-hidden="true">
                  <div class="modal-dialog">
                    <div class="modal-content" >
                      <div class="modal-header">
                        <h5 class="modal-title" id="a">The root of the n-th degree</h5>
                        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                      </div>
                      <div class="modal-body" >
                        <p>In mathematics, an nth root of a number x is a number r which, when raised to the power n, yields x:
                        where n is a positive integer, sometimes called the degree of the root. A root of degree 2 is called a square root and a root of degree 3, a cube root. Roots of higher degree are referred by using ordinal numbers, as in fourth root, twentieth root, etc. The computation of an nth root is a root extraction.
                        <p>For example, 3 is a square root of 9, since 3^2 = 9, and −3 is also a square root of 9, since (−3)^2 = 9.
                        Any non-zero number considered as a complex number has n different complex nth roots, including the real ones (at most two). The nth root of 0 is zero for all positive integers n, since 0^n = 0. In particular, if n is even and x is a positive real number, one of its nth roots is real and positive, one is negative, and the others (when n > 2) are non-real complex numbers;</p> If n is even and x is a negative real number, none of the nth roots is real. If n is odd and x is real, one nth root is real and has the same sign as x, while the other (n – 1) roots are not real. Finally, if x is not real, then none of its nth roots are real.</p> 
                      </div>
                      <div class="modal-footer">
                        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                      </div>
                    </div>
                  </div>
                </div>

    </li>
   </ul>
  </div>
  <div class="item">
   <h1>Polynomials</h1>
   <ul>
  <li>Madness theorem</li>
  <li>split"at an angle" </li>
  <li>classification by multipliers</li>
   </ul>
   <ul class="links">
    <li class="rows row1">
    
        <a href="#" role="button" class="nav nav-link active" data-bs-toggle="modal" data-bs-target="#b">proceed</a>
                <div class="modal fade" id="b" tabindex="-1" aria-labelledby="#b" aria-hidden="true">
                  <div class="modal-dialog">
                    <div class="modal-content" >
                      <div class="modal-header">
                        <h5 class="modal-title" id="b">Polynomials</h5>
                        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                      </div>
                      <div class="modal-body" >
                        <p>In mathematics, a polynomial is an expression consisting of indeterminates (also called variables) and coefficients, that involves only the operations of addition, subtraction, multiplication, and non-negative integer exponentiation of variables. An example of a polynomial of a single indeterminate x is x^2 − 4x + 7.</p> 
                        <p>An example in three variables is x^3 + 2xyz^2 − yz + 1.</p>
                        <p>Polynomials appear in many areas of mathematics and science. For example, they are used to form polynomial equations, which encode a wide range of problems, from elementary word problems to complicated scientific problems; they are used to define polynomial functions, which appear in settings ranging from basic chemistry and physics to economics and social science; they are used in calculus and numerical analysis to approximate other functions. In advanced mathematics, polynomials are used to construct polynomial rings and algebraic varieties, which are central concepts in algebra and algebraic geometry.</p> 
                      </div>
                      <div class="modal-footer">
                        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                      </div>
                    </div>
                  </div>
                </div>

    </li>
   </ul>
   </div>
  <div class="item">
   <h1>Exponential / logarithmic equation</h1>
   <ul>
  <li>indicator function</li>
  <li>logarithmic function</li>
  <li>equations and inequalities</li>
   </ul>
   <ul class="links">
    <li class="rows row1">
    
        <a href="#" role="button" class="nav nav-link active" data-bs-toggle="modal" data-bs-target="#c">proceed</a>
                <div class="modal fade" id="c" tabindex="-1" aria-labelledby="#c" aria-hidden="true">
                  <div class="modal-dialog">
                    <div class="modal-content" >
                      <div class="modal-header">
                        <h5 class="modal-title" id="c">Exponential / logarithmic equation</h5>
                        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                      </div>
                      <div class="modal-body" >
                        <p>An exponential equation is an equation in which the variable appears in an exponent. A logarithmic equation is an equation that involves the logarithm of an expression containing a variable. To solve exponential equations, first see whether you can write both sides of the equation as powers of the same number. If you cannot, take the common logarithm of both sides of the equation and then apply property 7.</p>
                        <p>Examples of the exponential equations<ul>
                        <li>3^x = 5</li>
                        <li>6^(x – 3) = 2</li>
                        <li>2^(3x – 1) = 3^(2x – 2)</li></p> 
                      </div>
                      <div class="modal-footer">
                        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                      </div>
                    </div>
                  </div>
                </div>

    </li>
   </ul>
  </div>
  <div class="item">
   <h1>Derivative / differentiation</h1>
   <ul>
  <li>derivative of the first and second order </li>
  <li>find crisis points, incremental intervals</li>
  <li>differentiation methods</li>
   </ul>
   <ul class="links">
    <li class="rows row1">
    
        <a href="#" role="button" class="nav nav-link active" data-bs-toggle="modal" data-bs-target="#d">proceed</a>
                <div class="modal fade" id="d" tabindex="-1" aria-labelledby="#d" aria-hidden="true">
                  <div class="modal-dialog">
                    <div class="modal-content" >
                      <div class="modal-header">
                        <h5 class="modal-title" id="d">Derivative / differentiation</h5>
                        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                      </div>
                      <div class="modal-body" >
                        <p>In mathematics, the derivative of a function of a real variable measures the sensitivity to change of the function value (output value) with respect to a change in its argument (input value). Derivatives are a fundamental tool of calculus. For example, the derivative of the position of a moving object with respect to time is the object's velocity: this measures how quickly the position of the object changes when time advances.</p>
                        <p>The derivative of a function of a single variable at a chosen input value, when it exists, is the slope of the tangent line to the graph of the function at that point. The tangent line is the best linear approximation of the function near that input value. For this reason, the derivative is often described as the "instantaneous rate of change", the ratio of the instantaneous change in the dependent variable to that of the independent variable.</p>
                        <img src="http://hyperphysics.phy-astr.gsu.edu/hbase/Math/immath/derfunc.png" width="90%" height="90%">
                      </div>
                      <div class="modal-footer">
                        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                      </div>
                    </div>
                  </div>
                </div>

    </li>
   </ul>
  </div>
  <div class="item">
   <h1>Integral</h1>
   <ul>
  <li>integration methods</li>
  <li>area of a flat shape</li>
  <li>volume of rotation bodies</li>
   </ul>
   <ul class="links">
    <li class="rows row1">
    
    <a href="#" role="button" class="nav nav-link active" data-bs-toggle="modal" data-bs-target="#e">proceed</a>
                <div class="modal fade" id="e" tabindex="-1" aria-labelledby="#e" aria-hidden="true">
                  <div class="modal-dialog">
                    <div class="modal-content" >
                      <div class="modal-header">
                        <h5 class="modal-title" id="e">Integral</h5>
                        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                      </div>
                      <div class="modal-body" >
                        <p>In mathematics, an integral assigns numbers to functions in a way that describes displacement, area, volume, and other concepts that arise by combining infinitesimal data. The process of finding integrals is called integration. Along with differentiation, integration is a fundamental, essential operation of calculus, and serves as a tool to solve problems in mathematics and physics involving the area of an arbitrary shape, the length of a curve, and the volume of a solid, among others.</p>
                        <p>The integrals enumerated here are those termed definite integrals, which can be interpreted as the signed area of the region in the plane that is bounded by the graph of a given function between two points in the real line. Conventionally, areas above the horizontal axis of the plane are positive while areas below are negative. Integrals also refer to the concept of an antiderivative, a function whose derivative is the given function. In this case, they are called indefinite integrals. The fundamental theorem of calculus relates definite integrals with differentiation and provides a method to compute the definite integral of a function when its antiderivative is known.</p> 
                        <img src="https://www.engineersedge.com/math/images/standa23.gif" width="90%" height="90%">
                      </div>
                      <div class="modal-footer">
                        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                      </div>
                    </div>
                  </div>
                </div>

    </li>
   </ul>
  </div>
  <div class="item">
   <h1>Polygons and rotating bodies</h1>
   <ul>
  <li>Prism / (truncated) pyramid </li>
  <li>cylinder/(cut) cone / sphere, ball.</li>
  <li> full and side surface area / volume</li>
   </ul>
   <ul class="links">
    <li class="rows row1">
    
        <a href="#" role="button" class="nav nav-link active" data-bs-toggle="modal" data-bs-target="#f">proceed</a>
                <div class="modal fade" id="f" tabindex="-1" aria-labelledby="#f" aria-hidden="true">
                  <div class="modal-dialog">
                    <div class="modal-content" >
                      <div class="modal-header">
                        <h5 class="modal-title" id="f">Polygons and rotating bodies</h5>
                        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                      </div>
                      <div class="modal-body" >
                        <p>In geometry, a solid of revolution is a solid figure obtained by rotating a plane curve around some straight line (the axis of revolution) that lies on the same plane. The surface created by this revolution and which bounds the solid is the surface of revolution.
                        Assuming that the curve does not cross the axis, the solid's volume is equal to the length of the circle described by the figure's centroid multiplied by the figure's area (Pappus's second centroid theorem).</p>
                        <img src="https://upload.wikimedia.org/wikipedia/commons/thumb/e/e7/Rotationskoerper_animation.gif/330px-Rotationskoerper_animation.gif">
                        <p>Two common methods for finding the volume of a solid of revolution are the disc method and the shell method of integration. To apply these methods, it is easiest to draw the graph in question; identify the area that is to be revolved about the axis of revolution; determine the volume of either a disc-shaped slice of the solid, with thickness δx, or a cylindrical shell of width δx; and then find the limiting sum of these volumes as δx approaches 0, a value which may be found by evaluating a suitable integral. A more rigorous justification can be given by attempting to evaluate a triple integral in cylindrical coordinates with two different orders of integration.</p> 
                        Disc method:
                        <img src="https://wikimedia.org/api/rest_v1/media/math/render/svg/bfa623372812f0365c5965f9a969fcb078fbdafd">
                      </div>
                      <div class="modal-footer">
                        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                      </div>
                    </div>
                  </div>
                </div>


    </li>
   </ul>
  </div>
  <div class="item">
   <h1>Vectors and coordinates</h1>
   <ul>
  <li>vector product</li>
  <li>equation of a plane/straight line/sphere </li>
  <li>find the angle/distance </li>
   </ul>
   <ul class="links">
    <li class="rows row1">
    
        <a href="#" role="button" class="nav nav-link active" data-bs-toggle="modal" data-bs-target="#g">proceed</a>
                <div class="modal fade" id="g" tabindex="-1" aria-labelledby="#g" aria-hidden="true">
                  <div class="modal-dialog">
                    <div class="modal-content" >
                      <div class="modal-header">
                        <h5 class="modal-title" id="g">Vectors and coordinates</h5>
                        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                      </div>
                      <div class="modal-body" >
                        <p>In linear algebra, a coordinate vector is a representation of a vector as an ordered list of numbers that describes the vector in terms of a particular ordered basis.[1] Coordinates are always specified relative to an ordered basis. Bases and their associated coordinate representations let one realize vector spaces and linear transformations concretely as column vectors, row vectors, and matrices; hence, they are useful in calculations.</p>
                        <p>We assume that you are familiar with the standard (x,y) Cartesian coordinate system in the plane. Each point p in the plane is identified with its x and y components: p=(p1,p2).</p>
                        <p>To determine the coordinates of a vector a in the plane, the first step is to translate the vector so that its tail is at the origin of the coordinate system. Then, the head of the vector will be at some point (a1,a2) in the plane. We call (a1,a2) the coordinates or the components of the vector a. We often write a∈R2 to denote that it can be described by two real coordinates.</p>
                        <img src="https://mathinsight.org/media/image/image/vector_2d_coordinates.png">
                        <p>The vector operations we defined in the vector introduction are easy to express in terms of these coordinates. If a=(a1,a2) and b=(b1,b2), their sum is simply a+b=(a1+b1,a2+b2), as illustrated in the below figure. It is also easy to see that b−a=(b1−a1,b2−a2) and λa=(λa1,λa2) for any scalar λ.</p> 
                        <img src="https://mathinsight.org/media/image/image/vector_2d_add.png" width="90%" height="90%">
                      </div>
                      <div class="modal-footer">
                        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                      </div>
                    </div>
                  </div>
                </div>


    </li>
   </ul>
  </div>
  <div class="item">
   <h1>Statistics</h1>
   <ul>
  <li> "stem-leaf" / "mustache box" </li>
  <li>mathematical care, variance, deviation</li>
  <li>point, interval estimation </li>
   </ul>
   <ul class="links">
    <li class="rows row1">
    
        <a href="#" role="button" class="nav nav-link active" data-bs-toggle="modal" data-bs-target="#h">proceed</a>
                <div class="modal fade" id="h" tabindex="-1" aria-labelledby="#h" aria-hidden="true">
                  <div class="modal-dialog">
                    <div class="modal-content" >
                      <div class="modal-header">
                        <h5 class="modal-title" id="h">Integral</h5>
                        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                      </div>
                      <div class="modal-body" >
                        <h1>What Is Statistics?</h1>
                        <p>Statistics is a branch of applied mathematics that involves the collection, description, analysis, and inference of conclusions from quantitative data. The mathematical theories behind statistics rely heavily on differential and integral calculus, linear algebra, and probability theory. Statisticians, people who do statistics, are particularly concerned with determining how to draw reliable conclusions about large groups and general events from the behavior and other observable characteristics of small samples. These small samples represent a portion of the large group or a limited number of instances of a general phenomenon.</p>
                        <img src="https://analyticsinsight.b-cdn.net/wp-content/uploads/2021/08/Importance-of-Statistics-How-is-Statistics-Related-to-Data-Science.jpg" width="70%" height="70%">
                        <p>The two major areas of statistics are known as descriptive statistics, which describes the properties of sample and population data, and inferential statistics, which uses those properties to test hypotheses and draw conclusions.</p> 
                        <p>Stem and leaf diagram:</p>
                        <img src="https://www.mathsisfun.com/data/images/stem-leaf-plot.svg">
                        <p>Variance and standart deviation</p>
                        <img src="https://cdn1.byjus.com/wp-content/uploads/2021/03/variance-and-sd-formula.png" width="90%" height="90%">
                        <p></p> 
                      </div>
                      <div class="modal-footer">
                        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                      </div>
                    </div>
                  </div>
                </div>


    </li>
   </ul>
  </div>
  <div class="item">
   <h1>Combinatorics</h1>
   <ul>
  <li>replace, place, Type</li>
  <li>Binomial, Poisson, Gauss distribution</li>
  <li>approximation</li>
   </ul>
   <ul class="links">
    <li class="rows row1">
    
        <a href="#" role="button" class="nav nav-link active" data-bs-toggle="modal" data-bs-target="#i">proceed</a>
                <div class="modal fade" id="i" tabindex="-1" aria-labelledby="#i" aria-hidden="true">
                  <div class="modal-dialog">
                    <div class="modal-content" >
                      <div class="modal-header">
                        <h5 class="modal-title" id="i">Combinatorics</h5>
                        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                      </div>
                      <div class="modal-body" >
                        <p>Combinatorics is an area of mathematics primarily concerned with counting, both as a means and an end in obtaining results, and certain properties of finite structures. It is closely related to many other areas of mathematics and has many applications ranging from logic to statistical physics and from evolutionary biology to computer science.
                        The full scope of combinatorics is not universally agreed upon. According to H.J. Ryser, a definition of the subject is difficult because it crosses so many mathematical subdivisions. Insofar as an area can be described by the types of problems it addresses, combinatorics is involved with:</p>
                        <p><strong>Binomial distribution</strong> describes the distribution of binary data from a finite sample. Thus it gives the probability of getting r events out of n trials.
                        <strong>Poisson distribution</strong> describes the distribution of binary data from an infinite sample. Thus it gives the probability of getting r events in a population.</p> 
                        <h1>The Normal Distribution</h1>
                        <p>It is often the case with medical data that the histogram of a continuous variable obtained from a single measurement on different subjects will have a characteristic `bell-shaped' distribution known as a Normal distribution. One such example is the histogram of the birth weight (in kilograms) of the 3,226 new born babies shown in Figure below</p>
                        <img src="https://www.healthknowledge.org.uk/sites/default/files/documents/publichealthtextbook/statistics/1b3b.jpg" width="90%" height="90%">
                      </div>
                      <div class="modal-footer">
                        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                      </div>
                    </div>
                  </div>
                </div>


    </li>
   </ul>
  </div>
  <div class="item">
   <h1>Equations and inequalities</h1>
   <ul>
  <li>has root sub/module </li>
  <li>trigonometric / logarithmic / exponential </li>
  <li>iteration/binomial classification</li>
   </ul>
   <ul class="links">
    <li class="rows row1">
    
        <a href="#" role="button" class="nav nav-link active" data-bs-toggle="modal" data-bs-target="#j">proceed</a>
                <div class="modal fade" id="j" tabindex="-1" aria-labelledby="#j" aria-hidden="true">
                  <div class="modal-dialog">
                    <div class="modal-content" >
                      <div class="modal-header">
                        <h5 class="modal-title" id="j">Equations and inequalities</h5>
                        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                      </div>
                      <div class="modal-body" >
                        <h1>√(x+2)≤4</h1>
                        <p>We have to solve two inequalities, since our x must work in the original, but also work so anything under the even radical is positive (domain restriction): x+2≥0.</p> 
                        <p>To get rid of the square roots, we square each side, and we can leave the inequality signs the same since we’re multiplying by positive numbers. Then we just solve for x, just like we would for an equation.</p>
                        <p>We need to check our answer by trying random numbers in our solution (like x=2) in the original inequality (which works). We also need to try numbers outside our solution (like x=−6 and x=20) and see that they don’t work.</p>
                        <p><strong>{x:−2≤x≤14} or [−2,14]</strong></p>
                      </div>
                      <div class="modal-footer">
                        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                      </div>
                    </div>
                  </div>
                </div>


    </li>
   </ul>
  </div>
  <div class="item">
   <h1>Complex numbers</h1>
   <ul>
  <li>in algebraic form </li>
  <li>in trigonometric form </li>
  <li>Argan diagram</li>
   </ul>
   <ul class="links">
    <li class="rows row1">
    
        <a href="#" role="button" class="nav nav-link active" data-bs-toggle="modal" data-bs-target="#k">proceed</a>
                <div class="modal fade" id="k" tabindex="-1" aria-labelledby="#k" aria-hidden="true">
                  <div class="modal-dialog">
                    <div class="modal-content" >
                      <div class="modal-header">
                        <h5 class="modal-title" id="k">Complex numbers</h5>
                        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                      </div>
                      <div class="modal-body" >
                        <p>In mathematics, a complex number is an element of a number system that contains the real numbers and a specific element denoted i, called the imaginary unit, and satisfying the equation i^2 = −1. Moreover, every complex number can be expressed in the form a + bi, where a and b are real numbers. Because no real number satisfies the above equation, i was called an imaginary number by René Descartes. For the complex number a + bi, a is called the real part and b is called the imaginary part. Despite the historical nomenclature "imaginary", complex numbers are regarded in the mathematical sciences as just as "real" as the real numbers and are fundamental in many aspects of the scientific description of the natural world.</p>
                        <img src="https://upload.wikimedia.org/wikipedia/commons/thumb/5/50/A_plus_bi.svg/375px-A_plus_bi.svg.png">
                        <p>An alternative option for coordinates in the complex plane is the polar coordinate system that uses the distance of the point z from the origin (O), and the angle subtended between the positive real axis and the line segment Oz in a counterclockwise sense. This leads to the polar form</p> 
                        <img src="https://wikimedia.org/api/rest_v1/media/math/render/svg/d9956a248cde14fe13d040c6983c3a2c7c437eb2">
                        <p>of a complex number, where r is the absolute value of z, and angle <strong>phi</strong> is the argument z.</p>
                        <p>The absolute value (or modulus or magnitude) of a complex number z = x + yi is</p>
                        <img src="https://wikimedia.org/api/rest_v1/media/math/render/svg/b59629c801aa0ddcdf17ee489e028fb9f8d4ea75">
                      </div>
                      <div class="modal-footer">
                        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                      </div>
                    </div>
                  </div>
                </div>


    </li>
   </ul>
  </div>
  <div class="item">
   <h1>Integral / differential problems</h1>
   <ul>
  <li> body temperature / radioactivity</li>
  <li>population / movement </li>
  <li>harmonic oscillation</li>
   </ul>
   <ul class="links">
    <li class="rows row1">
    
        <a href="#" role="button" class="nav nav-link active" data-bs-toggle="modal" data-bs-target="#l">proceed</a>
                <div class="modal fade" id="l" tabindex="-1" aria-labelledby="#l" aria-hidden="true">
                  <div class="modal-dialog">
                    <div class="modal-content" >
                      <div class="modal-header">
                        <h5 class="modal-title" id="l">Integral / differential problems</h5>
                        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                      </div>
                      <div class="modal-body">
                        <h2>Differential problems</h2>
                        <p>In mathematics, a differential equation is an equation that relates one or more unknown functions and their derivatives. In applications, the functions generally represent physical quantities, the derivatives represent their rates of change, and the differential equation defines a relationship between the two. Such relations are common; therefore, differential equations play a prominent role in many disciplines including engineering, physics, economics, and biology.</p>
                        <img src="https://wikimedia.org/api/rest_v1/media/math/render/svg/2a1cd29ae411a2d09205b3b39aec038af563d5e2">
                        <p>Mainly the study of differential equations consists of the study of their solutions (the set of functions that satisfy each equation), and of the properties of their solutions. Only the simplest differential equations are solvable by explicit formulas; however, many properties of solutions of a given differential equation may be determined without computing them exactly.</p> 
                        <h3>Types</h3>
                        <p>Differential equations can be divided into several types. Apart from describing the properties of the equation itself, these classes of differential equations can help inform the choice of approach to a solution. Commonly used distinctions include whether the equation is <strong>ordinary or partial, linear or non-linear, and homogeneous or heterogeneous</strong>. This list is far from exhaustive; there are many other properties and subclasses of differential equations which can be very useful in specific contexts.</p>
                        <h2>Integral problems</h2>
                        <h4>Body temperature</h4>
                            <img src="formula.png" width="100%" height="100%">
                      </div>
                      <div class="modal-footer">
                        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                      </div>
                    </div>
                  </div>
                </div>


    </li>
   </ul>
  </div>
</div>
</body>
</html>