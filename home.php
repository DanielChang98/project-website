<!-- CPT211 Group 8 home.php (content page) -->

<?php
#Start the session
session_start();

#function to.........
function check_input($data)
{   $data = trim($data);
    $data = stripslashes($data);
    $data = htmlspecialchars($data);
    return $data;
}

#if user does not log in yet
if($_SESSION['user'] == ''){
    header("Location: index.php");
}

#if form is submitted
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    #if user submits feedback
    if (isset($_POST['submit'])) {
        #check whether the text file feedback.txt exists
        $myfile = fopen("feedback.txt", "a") or die("Unable to open file!");
        $text =check_input($_POST['feedback']);
        #append feedback to text file
        fwrite($myfile, "\n- "."$text");
        fclose($myfile);
        #send alert to user telling user that feedback has been submitted
        echo '<script type="text/JavaScript">alert("Your feedback has been submitted.");</script>';
    }
}

#if user clicks log out button
if(isset($_POST['logout'])){
    #remove all session variables and destroy session
    session_unset();
    session_destroy();
    #redirects to index.php
    header('Location: index.php');
}

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>G8 CPT211 Assignment2</title>
    <link rel="stylesheet" href="main.css">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.3.1/css/all.css">
    <link rel="stylesheet" href="https://unpkg.com/aos@next/dist/aos.css" />
    <link href="https://fonts.googleapis.com/css2?family=Lato&family=Roboto+Slab:wght@500&family=Roboto:wght@500;700&display=swap" rel="stylesheet">
</head>

<!---Navigation Bar--->
<nav class="navigation">
    <ul>
        <li class="nav-item"><a href="#Home">Home</a></li>
        <li class="nav-item"><a href="#Content">Content</a></li>
        <li class="nav-item"><a href="#Lecturer">Lecturer</a></li>
        <li class="nav-item"><a href="#Topic1">Topic 1</a></li>
        <li class="nav-item"><a href="#Topic2">Topic 2</a></li>
        <li class="nav-item"><a href="#Topic3Page">Topic 3</a></li>
        <li class="nav-item"><a href="#ContactPage">Contact</a></li>
        <li class="nav-item"><a href="#Feedback">Feedback</a></li>
        <!---Logout Button--->
        <li class="nav-item">
            <form action='' method="post">
                <input type="submit" value="Logout" name='logout'>
            </form>
        </li>
    </ul>
    <div class="BGM" id="bgm" onclick="playPause();"><i class="fas fa-pause-circle"></i></div>
</nav>
<!---End of Navigation Bar--->

<!---Preloader to show when the website is loading--->
<div class="preloader">
    <div class="loader"></div>
</div>
<!---End of Preloader-->

<body>
    <!---Home Page showing title of the subject--->
    <section id="Home">
        <div class="main-page">
            <div class="title" data-aos="fade-up">
                <h1>CPT 212</h1>
                <hr>
                <p>Algorithm Analysis and Design</p>
            </div>
        </div>
    </section>
    <!---End of Home Page--->

    <!---Content Page showing main topics available--->
    <section id="Content">
        <div data-aos="fade-down">
            <h1>Let's Get Started</h1>
        </div>
        <div class="wrapper">
            <div class="box">
                <div class="imgBox">
                    <img src = "res/teacher.jpg" alt="Lecturer"/>
                    <div class="overlay">
                        <div class="content">
                            Our Lecturer
                            <div><a href="#Lecturer">Read More</a> </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="box">
                <div class="imgBox">
                    <img src = "res/sort.png" alt="Topic1"/>
                    <div class="overlay">
                        <div class="content">
                            Topic 1: Sorting Algos
                            <div><a href="#Topic1">Read More</a></div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="box">
                <div class="imgBox">
                    <img src = "res/binarytree.jpg" alt="Topic2"/>
                    <div class="overlay">
                        <div class="content">
                            Topic 2: Binary Trees
                            <div><a href="#Topic2">Read More</a> </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="box">
                <div class="imgBox">
                    <img src = "res/graph.jpg" alt="Topic3"/>
                    <div class="overlay">
                        <div class="content">
                            Topic 3: Graphs
                            <div><a href="#Topic3">Read More</a> </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!---End of Content Page--->

    <!---Our Lecturer Page showing Lecturer Details--->
    <section id="Lecturer">
        <div data-aos="fade-right">
            <h1 class="heading">Lecturer Information: Teh Je Sen, Dr.</h1>
        </div>
        <div class="contentBxRow">
            <div class="contentBxColumn"><img src = "res/Dr.Teh.jpg" alt="Dr.Teh Photo"/></div>
            <div class="contentBxColumn">
                <h3 class="subheading"><br>Senior Lecturer</h3>
                <p class="contentBxP">Email : jesen_teh@usm.my<br><br>Tel : +604 653 4046
                    <br>Fax : +604 653 3335<br>Room : 731
                    <br><br>School of Computer Sciences, Universiti Sains Malaysia, 11800 USM, Pulau Pinang</p>
                <h3 class="subheading"><br>Research Cluster</h3>
                <p class="contentBxP">Enabling Technologies & Infrastructures</p><br></div>
            <div class="contentBxColumn">
                <h3 class="subheading"><br>Research Interest</h3>
                <ul class="contentBxP">
                    <li>Cryptography</li>
                    <li>Cryptanalysis</li>
                    <li>Random number generation</li>
                    <li>Chaos theory</li>
                </ul>
                <h3 class="subheading"><br>Specialization</h3>
                <ul class="contentBxP">
                    <li>Information Security</li>
                    <li>Cryptography</li>
                    <li>Cryptanalysis</li>
                </ul>
            </div>
        </div>
        <div class="contentBx2"></div>
    </section>
    <!---End of Our Lecturer Page--->

    <!---Topic 1 Section--->
    <section id="Topic1">
        <div id="Topic1Title">
            <div class="topic1-inner">
                <div class="topic1-title" data-aos="fade-up">
                    <h1>Topic 1: Sorting Algos</h1>
                </div>
            </div>
        </div>

        <div id="Topic1Sub1">
            <div class="content1-wording">
                <div data-aos="zoom-out">
                    <h1>What is a <a href="#Topic1Sub1" class="r-link animated-underline animated-underline_type1 news__link">Sorting Algo</a>?</h1>
                    <p>A Sorting Algorithm is used to rearrange a given <a href="#Topic1Sub1" class="r-link animated-underline2 animated-underline_type5 news__link">array</a> or <a href="#Topic1Sub1" class="r-link animated-underline2 animated-underline_type5 news__link">list elements</a> according to a comparison operator on the elements. The comparison operator is used to decide the new order of element in the respective data structure.</p>
                </div>
            </div>
            <div class="content1-graphic">
                <img src="res/what.png" height="auto" width="400px" alt="topic1What">
            </div>
        </div>

        <div id="Topic1Sub2">
            <div class="content2-graphic">
                <div class="sliderTopic1">
                    <div class="slidesT1">
                        <div id="t1">
                            <img src="res/bubbleSort.gif" alt="t1 img">
                        </div>
                        <div id="t2">
                            <img src="res/selectionSort.gif" alt="t2 img">
                        </div>
                        <div id="t3">
                            <img src="res/insertionSort.gif" alt="t3 img">
                        </div>
                    </div>
                </div>
            </div>
            <div class="topic1Wording2">
                <p>3 types of sorting algorithms are discussed:</p>
                <ul>
                    <li><a href="#t1">Bubble Sort</a></li>
                    <li><a href="#t2">Selection Sort</a></li>
                    <li><a href="#t3">Insertion Sort</a></li>
                </ul>
            </div>
        </div>

        <div id="Topic1Sub3">
            <div class="subtopic">
                <div data-aos="flip-right">
                    <h1>Bubble Sort</h1>
                </div>
                <div class="flex2">
                    <div class="titleT1">
                        <h2>Descriptions</h2>
                        <p class="para1">This algorithm repeatedly <a href="#Topic1Sub3" class="r-link animated-underline2 animated-underline_type5 news__link">compares</a> and <a href="#Topic1Sub3" class="r-link animated-underline2 animated-underline_type5 news__link">swaps</a> (if needed) the adjacent elements in every pass.
                            In i-th pass of bubble sort, the last (i-1) elements are already sorted, and i-th largest
                            element is placed at the last position.
                        </p>
                    </div>
                    <div class="algo1">
                        <h2>The Algorithms</h2>
                        <div class="subBox">
                            <div class="subImage">
                                <img src="res/bubble1.JPG" alt="bubble1" id="Bubble1" onclick="change();">
                                <div class="overlayWord">
                                    <div class="word">
                                        Click image to show next
                                    </div>
                                </div>
                            </div>
                        </div>
                        <a class="button1" href="#Video1" onclick="toggle();pause();">
                            Watch Video<i class="fas fa-play-circle">&nbsp</i>
                        </a>
                        <div class="videoTopic1" id="Video1">
                            <video src="res/bubbleSort.mp4" controls></video>
                            <img class="close" src="res/close.png" onclick="toggle();play();" alt="Video1">
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <div id="Topic1Sub4">
            <div class="subtopic">
                <div data-aos="flip-right">
                    <h1>Selection Sort</h1>
                </div>
                <div class="flex2">
                    <div class="titleT1">
                        <h2>Descriptions</h2>
                        <p>This algorithm <a href="#Topic1Sub4" class="r-link animated-underline2 animated-underline_type5 news__link">divides</a> the array into two parts: sorted (left) and unsorted (right) subarray.
                            It repeatedly selects the <a href="#Topic1Sub4" class="r-link animated-underline2 animated-underline_type5 news__link">smallest</a> element from unsorted subarray and places in the <a href="#Topic1Sub4" class="r-link animated-underline2 animated-underline_type5 news__link">first</a> position of
                            that subarray (ascending order).
                        </p>
                    </div>
                    <div class="algo1">
                        <h2>The Algorithms</h2>
                        <div class="subBox">
                            <div class="subImage">
                                <img src="res/select1.JPG" alt="selection1" id="Selection1" onclick="change2();">
                                <div class="overlayWord">
                                    <div class="word">
                                        Click image to show next
                                    </div>
                                </div>
                            </div>
                        </div>
                        <a class="button1" href="#Video2" onclick="toggle2();pause();">
                            Watch Video<i class="fas fa-play-circle">&nbsp</i>
                        </a>
                        <div class="videoTopic2" id="Video2">
                            <video src="res/selectionSort.mp4" controls></video>
                            <img class="close" src="res/close.png" onclick="toggle2();play();" alt="Video2">
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <div id="Topic1Sub5">
            <div class="subtopic">
                <div data-aos="flip-right">
                    <h1>Insertion Sort</h1>
                </div>
                <div class="flex2">
                    <div class="titleT1">
                        <h2>Descriptions</h2>
                        <p>This algorithm <a href="#Topic1Sub5" class="r-link animated-underline2 animated-underline_type5 news__link">inserts</a> every array element into its proper position.
                            In i-th iteration, <a href="#Topic1Sub5" class="r-link animated-underline2 animated-underline_type5 news__link">previous</a> (i-1) elements are already sorted, and the i-th element
                            is inserted into its proper place in the previously sorted subarray.
                        </p>
                    </div>
                    <div class="algo1">
                        <h2>The Algorithms</h2>
                        <div class="subBox">
                            <div class="subImage">
                                <img src="res/insertion1.JPG" alt="insertion1" id="Insertion1" onclick="change3();">
                                <div class="overlayWord">
                                    <div class="word">
                                        Click image to show next
                                    </div>
                                </div>
                            </div>
                        </div>
                        <a class="button1" href="#Video3" onclick="toggle3();pause();">
                            Watch Video<i class="fas fa-play-circle">&nbsp</i>
                        </a>
                        <div class="videoTopic3" id="Video3">
                            <video src="res/insertionSort.mp4" controls></video>
                            <img class="close" src="res/close.png" onclick="toggle3();play();" alt="Video3">
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <div id="Topic1Table">
            <div class="tableTopic1">
                <div data-aos="flip-down">
                    <h2>Time Complexity &emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;<span>Advantage & Disadvantage</span></h2>
                </div>
                <table id="table1">
                    <tr>
                        <th>Sorting Algorithm</th>
                        <th>Best Case</th>
                        <th>Average Case</th>
                        <th>Worst Case</th>
                        <th>Advantage</th>
                        <th>Disadvantage</th>
                    </tr>
                    <tr>
                        <td>Bubble Sort</td>
                        <td>O(N)</td>
                        <td>O(N<sup>2</sup>)</td>
                        <td>O(N<sup>2</sup>)</td>
                        <td>
                            <ul>
                                <li>It is the <b>simplest</b> sorting approach.</li>
                                <li>It is a <b>stable</b> sort, where it does not change the relative order of elements with equal keys.</li>
                                <li>Using optimized approach, it can detect already sorted array in first pass with time complexity of O(1).</li>
                            </ul>
                        </td>
                        <td>
                            <ul>
                                <li>It is a comparatively <b>slow</b> algorithm.</li>
                            </ul>
                        </td>
                    </tr>
                    <tr>
                        <td>Selection Sort</td>
                        <td>O(N<sup>2</sup>)</td>
                        <td>O(N<sup>2</sup>)</td>
                        <td>O(N<sup>2</sup>)</td>
                        <td>
                            <ul>
                                <li>It can also be used on list structures that make add and remove efficient,
                                    such as a <b>linked list</b>.
                                </li>
                                <li>Number of swaps is reduced. O(N) swaps in all cases.
                                </li>
                            </ul>
                        </td>
                        <td>
                            <ul>
                                <li>Time complexity in all cases is O(N<sup>2</sup>),
                                    no best case scenario.
                                </li>
                            </ul>
                        </td>
                    </tr>
                    <tr>
                        <td>Insertion Sort</td>
                        <td>O(N)</td>
                        <td>O(N<sup>2</sup>)</td>
                        <td>O(N<sup>2</sup>)</td>
                        <td>
                            <ul>
                                <li>Number of swaps reduced than bubble sort.
                                </li>
                                <li>It is <b>adaptive</b> , where total number of steps is
                                    reduced for partially sorted array.
                                </li>
                            </ul>
                        </td>
                        <td>
                            <ul>
                                <li>It is generally used when the value of N is small.
                                    For larger values of N, it is inefficient.
                                </li>
                            </ul>
                        </td>
                    </tr>
                </table>
            </div>
        </div>

        <!---Topic 1 Sorting Algorithms Visualizer--->
        <div id="ExeTopic1">
            <div data-aos="fade-up">
                <h1>Sorting Algorithms Visualization</h1>
            </div>
            <div class="visualizer"></div>
            <div class="visualizer-selector">
                <select id="blockNo" class="visualizer-drop-down-list" name="Number of Blocks">
                    <option value=5>Number of Blocks: 5</option>
                    <option value=10>Number of Blocks: 10</option>
                    <option value=15>Number of Blocks: 15</option>
                    <option value=20>Number of Blocks: 20</option>
                </select>
                <select id="sortingType" class="visualizer-drop-down-list" name="Sorting Algorithm">
                    <option value="Bubble Sort">Bubble Sort</option>
                    <option value="Selection Sort">Selection Sort</option>
                    <option value="Insertion Sort">Insertion Sort</option>
                </select>
                <input type="button" id="startVisualizer" class="interactive-button" value="Start" onclick="sortingVisualizer()">
            </div>
        </div>
    </section>
    <!--End of Topic 1 Section-->

    <!-- Topic 2 Section-->
    <section id="Topic2">
    <div id="Topic2Page">
        <div class="topic1-inner">
            <div class="topic1-title" data-aos="flip-left">
                <h1>Topic 2: Trees</h1>
            </div>
        </div>
    </div>
        <div id="Topic2-content1">
            <div class="content1-wording">
                <div data-aos="zoom-in-up">
                    <h1>What is a <a href="#Topic2-content1" class="r-link animated-underline animated-underline_type1 news__link">Tree</a>?</h1>
                    <p>Tree is hierarchical data structure which stores the information naturally in the form of
                        hierarchy unlike linear data structures like, Linked List, Stack, etc. A tree contains
                        <a href="#Topic2-content1" class="r-link animated-underline2 animated-underline_type5 news__link">nodes(data)</a> and
                        <a href="#Topic2-content1" class="r-link animated-underline2 animated-underline_type5 news__link">connections(edges)</a>
                        which should not form a cycle.</p>
                </div>
            </div>
            <div class="content1-graphic">
                <img src="res/nature-man.png" alt="t2 c1 graphic">
            </div>
        </div>

        <div id="Topic2Title0">
            <div class = "tree-properties"><br>
                <div data-aos="zoom-in-up">
                    <br><p>Following are the few frequently used terminologies for Tree data structure.</p>
                </div>
                <p><a href="#Topic2Title0" class="r-link animated-underline animated-underline_type1 news__link">Node</a>- A node is a structure which may contain a value or condition, or represent a
                    separate data structure.</p>
                <p><a href="#Topic2Title0" class="r-link animated-underline animated-underline_type1 news__link">Root</a>- The top node in a tree, the prime ancestor.</p>
                <p><a href="#Topic2Title0" class="r-link animated-underline animated-underline_type1 news__link">Child</a>- A node directly connected to another node when moving away from the root, an
                    immediate descendant.</p>
                <p><a href="#Topic2Title0" class="r-link animated-underline animated-underline_type1 news__link">Parent</a>- The converse notion of a child, an immediate ancestor.</p>
                <p><a href="#Topic2Title0" class="r-link animated-underline animated-underline_type1 news__link">Leaf</a>- A node with no children.</p>
                <p><a href="#Topic2Title0" class="r-link animated-underline animated-underline_type1 news__link">Internal node</a>- A node with at least one child.</p>
                <p><a href="#Topic2Title0" class="r-link animated-underline animated-underline_type1 news__link">Edge</a>- he connection between one node and another.</p>
                <p><a href="#Topic2Title0" class="r-link animated-underline animated-underline_type1 news__link">Depth</a>- The number of edges from root to the node.</p>
                <p><a href="#Topic2Title0" class="r-link animated-underline animated-underline_type1 news__link">Level</a>- Same as depth terminology.</p>
                <p><a href="#Topic2Title0" class="r-link animated-underline animated-underline_type1 news__link">Height</a>- The maximum depth of any node.</p><br/>
                <p><a href="#Topic2Title0" class="r-link animated-underline animated-underline_type1 news__link">Binary tree</a>- where each internal node 𝑣 stores an element 𝑒 such that
                    elements stored on the left subtree of 𝑣 are less than or equal to 𝑒,
                    and the elements stored on the right subtree of 𝑣 are greater than or equal to 𝑒.</p>
            </div>
        </div>

        <div id="Topic2Title">
            <div class="flex1">
                <div class="T2subtopic">
                    <div data-aos="zoom-in-right">
                        <h2 id = "subtopic1">Inorder Traversal</h2>
                    </div>
                    <p>It will start from the root node of the tree and go deeper-and-deeper into the left subtree with recursive manner.</p>
                    <p class="list">Traverse left edge<br/>Visit current node<br/>Traverse right edge<br/></p>
                    <div class="subBox">
                        <div class="subImage">
                            <img src="res/inorder.gif" alt="Inorder Traversal">
                        </div>
                    </div>
                </div>
                <div class="T2subtopic">
                    <div data-aos="zoom-in-right">
                        <h2 id = "subtopic2">Preorder Traversal</h2>
                    </div>
                    <p>It will visit the current node first and then goes to the left sub-tree, then only right sub-tree.</p>
                    <p class="list">Visit current node<br/>Traverse left edge<br>Traverse right edge<br>
                    </p>

                    <div class="subBox">
                        <div class="subImage">
                            <img src="res/preorder.gif" alt="Preorder Traversal">
                        </div>
                    </div>
                </div>
                <div class="T2subtopic">
                    <div data-aos="zoom-in-right">
                        <h2 id = "subtopic3">Postorder Traversal</h2>
                    </div>
                    <p>It will visit the left subtree and the right subtree before visiting the current node in recursion.
                    </p>
                    <p class="list">Traverse left edge<br/>Traverse right edge<br/>Visit current node
                    </p>

                    <div class="subBox">
                        <div class="subImage">
                            <img src="res/postorder.gif" alt="Postorder Traversal">
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <div id="Topic2Title2">
            <div class="T2Function">
                <div data-aos="zoom-in-left">
                    <h2>Insertion</h2>
                </div>
                <p>Assume that we want to insert a new node, 𝑤 whose key is 𝑘. We will perform the following steps:
                    First perform 𝑻𝒓𝒆𝒆𝑺𝒆𝒂𝒓𝒄𝒉 to find an appropriate location to place the new node.
                    If a node 𝑣 with the same key 𝒌 already exists in the tree,
                    search the left subtree of node 𝑣 to find an appropriate location to place the node.
                    If a null node is identified, place 𝑤 in this location.
                </p>
            </div>
            <div class="row">
                <div class="column">
                    <img src="res/insertion1.gif" alt="insertion">
                </div>
            </div>
        </div>

        <div id="Topic2Title3">
            <div class="T2Function">
                <div data-aos="zoom-in-left">
                    <h2>Searching</h2>
                </div>
                <p>We can traverse a binary search tree 𝑇 to locate an element or item with a certain value 𝑥.
                    At each internal node, compare our search element 𝑥 to the value of the current node.
                    If the value is equal, search terminates successfully.
                    If 𝑥 is greater, traverse the right subtree.
                    If 𝑥 is smaller, traverse the left subtree.
                    If an external node is reached (null), search terminates unsuccessfully.
                </p>
            </div>
            <div class="row">
                <div class="column">
                    <img src="res/searching1.gif" alt="searching" style="width:100%">
                </div>
                <div class="column">
                    <img src="res/searching2.gif" alt="searching" style="width:100%">
                </div>
            </div>
        </div>

        <div id="Topic2Title4">
            <div class="T2Function">
                <div data-aos="zoom-in-left">
                    <h2>Deletion</h2>
                </div>
                <p>Deletion can be happen in 3 cases of situations as below : </p>
                <div class="row">
                    <div class="column">
                        <p>Case 1 : Deleting an external node, w</p>
                        <p>Deleting a node with two null children can be done immediately without issues.
                        </p>
                    </div>
                    <div class="column">
                        <p>Case 2 : Deleting an internal node w with an external node child</p>
                        <p>If one of the children of node 𝑤 is an external node 𝑧,
                            delete 𝑤 and 𝑧 and replace it with the sibling of 𝑧
                        </p>
                    </div>
                    <div class="column">
                        <p>Case 3 : Deleting an internal node,w with 2 internal nodes children</p>
                        <p>If both children of node 𝑤 are internal nodes,
                            Find the first internal node 𝑦 that follows 𝑤 in an inorder traversal.
                            Replace the element in 𝑤 with the element in 𝑦.
                            Perform the deletion process on 𝑦.</p>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="column">
                    <img src="res/deletion2.gif" alt="deletion" style="width:100%">
                </div>
                <div class="column">
                    <img src="res/deletion1.gif" alt="deletion" style="width:100%">
                </div>
                <div class="column">
                    <img src="res/deletion3.gif" alt="deletion" style="width:100%">
                </div>
            </div>
        </div>

        <!---Topic 2 Checkpoint (Quiz)--->
        <div id="ExeTopic2">
            <div data-aos="fade-up">
                <h1>Topic 2 Checkpoint</h1>
            </div>
            <div class="quiz">
                <div id="question-A" class="quiz-question">Question</div>
                <div id="choice-buttons-A" class="quiz-button-group">
                    <button class="quiz-button">A</button>
                    <button class="quiz-button">B</button>
                    <button class="quiz-button">C</button>
                    <button class="quiz-button">D</button>
                </div>
                <div class="quiz-controls-group">
                    <button id="previous-button-A" class="interactive-button">Previous</button>
                    <button id="next-button-A" class="interactive-button">Next</button>
                </div>
            </div>
        </div>
    </section>
    <!-- End of Topic 2 Section-->

    <!-- Topic 3 Section-->
    <section id="Topic3Page">
        <div id="Topic3">
            <div class="topic3-inner">
                <div class="topic3-title" data-aos="zoom-in">
                    <h1>Topic 3: Graphs</h1>
                </div>
                <div class="topic3-svg">
                    <svg id="Untitled1" data-name="Layer 1" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 767 500" data-llp-composed="true" class="lazy-line-painter">
                        <defs>
                            <style>.cls-1{fill:none;stroke:#000;stroke-miterlimit:10;}</style>
                        </defs>
                        <title>Untitled-1</title>
                        <path d="M612,161a27,27,0,1,1-27,27,27,27,0,0,1,27-27m0-1a28,28,0,1,0,28,28,28,28,0,0,0-28-28Z" transform="translate(-205 -160)" data-llp-id="Untitled1-0" data-llp-duration="500" data-llp-delay="0" fill-opacity="0" style="stroke-linejoin: miter; stroke-linecap: butt;" data-llp-stroke-join="miter" data-llp-stroke-cap="butt"/>
                        <path d="M478,335a25,25,0,1,1-25,25,25,25,0,0,1,25-25m0-1a26,26,0,1,0,26,26,26,26,0,0,0-26-26Z" transform="translate(-205 -160)" data-llp-id="Untitled1-1" data-llp-duration="500" data-llp-delay="500" fill-opacity="0" style="stroke-linejoin: miter; stroke-linecap: butt;" data-llp-stroke-join="miter" data-llp-stroke-cap="butt"/>
                        <path d="M736,355a40,40,0,1,1-40,40,40,40,0,0,1,40-40m0-1a41,41,0,1,0,41,41,41,41,0,0,0-41-41Z" transform="translate(-205 -160)" data-llp-id="Untitled1-2" data-llp-duration="500" data-llp-delay="1000" fill-opacity="0" style="stroke-linejoin: miter; stroke-linecap: butt;" data-llp-stroke-join="miter" data-llp-stroke-cap="butt"/>
                        <path d="M927.5,266A43.5,43.5,0,1,1,884,309.5,43.54,43.54,0,0,1,927.5,266m0-1A44.5,44.5,0,1,0,972,309.5,44.5,44.5,0,0,0,927.5,265Z" transform="translate(-205 -160)" data-llp-id="Untitled1-3" data-llp-duration="500" data-llp-delay="1500" fill-opacity="0" style="stroke-linejoin: miter; stroke-linecap: butt;" data-llp-stroke-join="miter" data-llp-stroke-cap="butt"/>
                        <path d="M547,539a28,28,0,1,1-28,28,28,28,0,0,1,28-28m0-1a29,29,0,1,0,29,29,29,29,0,0,0-29-29Z" transform="translate(-205 -160)" data-llp-id="Untitled1-4" data-llp-duration="500" data-llp-delay="2000" fill-opacity="0" style="stroke-linejoin: miter; stroke-linecap: butt;" data-llp-stroke-join="miter" data-llp-stroke-cap="butt"/>
                        <path d="M256,387a50,50,0,1,1-50,50,50.06,50.06,0,0,1,50-50m0-1a51,51,0,1,0,51,51,51,51,0,0,0-51-51Z" transform="translate(-205 -160)" data-llp-id="Untitled1-5" data-llp-duration="500" data-llp-delay="2500" fill-opacity="0" style="stroke-linejoin: miter; stroke-linecap: butt;" data-llp-stroke-join="miter" data-llp-stroke-cap="butt"/>
                        <line class="cls-1" x1="391.5" y1="51.5" x2="292.5" y2="182.5" data-llp-id="Untitled1-6" data-llp-duration="500" data-llp-delay="3000" fill-opacity="0" style="stroke-linejoin: miter; stroke-linecap: butt;" data-llp-stroke-join="miter" data-llp-stroke-cap="butt"/>
                        <line class="cls-1" x1="253.5" y1="217.5" x2="101.5" y2="276.5" data-llp-id="Untitled1-7" data-llp-duration="500" data-llp-delay="3500" fill-opacity="0" style="stroke-linejoin: miter; stroke-linecap: butt;" data-llp-stroke-join="miter" data-llp-stroke-cap="butt"/>
                        <line class="cls-1" x1="314.5" y1="397.5" x2="101.5" y2="276.5" data-llp-id="Untitled1-8" data-llp-duration="500" data-llp-delay="4000" fill-opacity="0" style="stroke-linejoin: miter; stroke-linecap: butt;" data-llp-stroke-join="miter" data-llp-stroke-cap="butt"/>
                        <line class="cls-1" x1="357.5" y1="382.5" x2="507.5" y2="268.5" data-llp-id="Untitled1-9" data-llp-duration="500" data-llp-delay="4500" fill-opacity="0" style="stroke-linejoin: miter; stroke-linecap: butt;" data-llp-stroke-join="miter" data-llp-stroke-cap="butt"/>
                        <line class="cls-1" x1="298.5" y1="199.5" x2="678.5" y2="142.5" data-llp-id="Untitled1-10" data-llp-duration="500" data-llp-delay="5000" fill-opacity="0" style="stroke-linejoin: miter; stroke-linecap: butt;" data-llp-stroke-join="miter" data-llp-stroke-cap="butt"/>
                    </svg>
                </div>
            </div>
        </div>

        <div id="Topic3-content1">
            <div class="content1-wording">
                <div data-aos="flip-up">
                    <h1>What is a <a href="#c1" class="r-link animated-underline animated-underline_type1 news__link">Graph</a>?</h1>
                    <p>Graph is a way to represent relationships that exist between pair of objects. A graph is a set of objects, called <a href="#c1" class="r-link animated-underline2 animated-underline_type5 news__link">vertices</a>, together with a collection of pairwise connections between them, called <a href="#c1" class="r-link animated-underline2 animated-underline_type5 news__link">edges</a>.</p>
                </div>
            </div>
            <div class="content1-graphic">
                <img src="res/graph-man.png">
            </div>
        </div>

        <div id="Topic3-content2">
            <div class="content2-graphic">
                <div class="slider">
                    <div class="slides">
                        <div id="slide-1">
                            <img src="res/dg.png">
                        </div>
                        <div id="slide-2">
                            <img src="res/dg2.png">
                        </div>
                        <div id="slide-3">
                            <img src="res/mg.png">
                        </div>
                    </div>
                </div>
            </div>
            <div class="content2-wording">
                <p>There are 3 types of graphs:</p>
                <ul>
                    <li><a href="#slide-1">Undirected Graph</a></li>
                    <li><a href="#slide-2">Directed Graph</a></li>
                    <li><a href="#slide-3">Mixed Graph</a></li>
                </ul>
            </div>
        </div>

        <div id="Topic3-content3">
            <div class="content3-wording" id="c3a">
                <p>To traverse a graph, <a href="#c3a" class="r-link animated-underline2 animated-underline_type5 news__link">Depth First Search</a> and <a href="#c3a" class="r-link animated-underline2 animated-underline_type5 news__link">Breadth First Search</a> are commonly used.</p>
            </div>
            <div class="content3-wording-container" id="c3">
                <div class="DFS">
                    <div class="DFS-header">
                        <div data-aos="flip-right">
                            <h1><a href="#c3a" class="r-link animated-underline animated-underline_type1 news__link">Depth First Search</a></h1>
                        </div>
                    </div>
                    <div class="DFS-body">
                        <p>Depth First Search (DFS) is a graph traversal algorithm. A traversal is a systematic procedure for exploring a graph by examining all of its vertices and edges. We begin at a speciﬁc starting vertex <i>s</i> in G, and labelling <i>s</i> as “visited.” DFS <a href="#c3a" class="r-link animated-underline2 animated-underline_type5 news__link">goes deeper</a> into one path before exploring other alternative paths. DFS uses <a href="#c3a" class="r-link animated-underline2 animated-underline_type5 news__link">stack</a> data structure to keep track of which vertex has been visited. </p>
                    </div>
                </div>
                <div class="BFS">
                    <div class="BFS-header">
                        <div data-aos="flip-right">
                            <h1><a href="#c3a" class="r-link animated-underline animated-underline_type1 news__link">Breadth First Search</a></h1>
                        </div>
                    </div>
                    <div class="BFS-body">
                        <p>Breadth First Search (BFS) is another graph traversal algorithm. The BFS algorithm is more akin to sending out, in all directions, many explorers who collectively traverse a graph in coordinated fashion. A BFS proceeds in rounds and subdivides the vertices into levels. In other words, it <a href="#c3a" class="r-link animated-underline2 animated-underline_type5 news__link">explores all alternative paths</a> before going deeper. BFS commonly uses <a href="#c3a" class="r-link animated-underline2 animated-underline_type5 news__link">queue</a> data structure.</p>
                    </div>
                </div>
            </div>
        </div>

        <div id="Topic3-content4">
            <div class="DFS-gif">
                <img src="res/dfs.gif">
            </div>
            <div class="content4-middle">
                <div data-aos="zoom-in-up">
                    <p>vs.</p>
                </div>
            </div>
            <div class="BFS-gif">
                <img src="res/bfs.gif">
            </div>
        </div>

        <div id="Topic3-content5">
            <div class="content5-a">
                <div data-aos="zoom-in-left">
                    <p>Some common questions regarding graphs include:</p>
                </div>
            </div>
            <div class="content5-b">
                <div class="strongly-connected">
                    <div class="content5-header">
                        <h1><span class="highlight">Strongly Connected</span></h1>
                    </div>
                    <div class="desc">
                        <ul>
                            <li>For any two vertices, u and v, both vertices are mutually reachable.</li>
                            <li>Uses DFS algorithm.</li>
                        </ul>
                    </div>
                    <div class="image-part">
                        <img src="res/scc.png">
                    </div>
                </div>
                <div class="cycle-detection">
                    <div class="content5-header">
                        <h1><span class="highlight">Cycle Detection</span></h1>
                    </div>
                    <div class="desc">
                        <ul>
                            <li>Find how many cycles are in the graph.</li>
                            <li>Uses DFS algorithm.</li>
                        </ul>
                    </div>
                    <div class="image-part">
                        <img src="res/cycle.png">
                    </div>
                </div>
                <div class="shortest-path">
                    <div class="content5-header">
                        <h1><span class="highlight">Shortest Path</span></h1>
                    </div>
                    <div class="desc">
                        <ul>
                            <li>Find the shortest path between vertices.</li>
                            <li>Uses Dijkstra's Algorithm.</li>
                        </ul>
                    </div>
                    <div class="image-part">
                        <img src="res/sp.png">
                    </div>
                </div>
            </div>
        </div>

        <!---Topic 3 Checkpoint (Quiz)--->
        <div id="ExeTopic3">
            <div data-aos="zoom-out">
                <h1>Topic 3 Checkpoint</h1>
            </div>
            <div class="quiz">
                <div id="question-B" class="quiz-question">Question</div>
                <div id="choice-buttons-B" class="quiz-button-group">
                    <button class="quiz-button">A</button>
                    <button class="quiz-button">B</button>
                    <button class="quiz-button">C</button>
                    <button class="quiz-button">D</button>
                </div>
                <div class="quiz-controls-group">
                    <button id="previous-button-B" class="interactive-button">Previous</button>
                    <button id="next-button-B" class="interactive-button">Next</button>
                </div>
            </div>
        </div>
    </section>
    <!--End of Topic 3-->

    <!--Contact Page-->
    <section id="ContactPage">
        <div id="contact-heading">
            <div class="contact-heading1">
                <img src="res/son.png">
            </div>
            <div class="contact-heading2" id="contact" data-aos="fade-left">
                <h1><a href="#contact-heading" class="r-link animated-underline2 news__link">Contact</a></h1>
            </div>
            <div class="contact-heading3">
                <img src="res/mother.png">
            </div>
        </div>

        <div id="Contact">
            <!-- for contacts part-->
            <div class="scroll-container-1">
                <div class="full-inner">
                    <div class="contactbox" >
                        <img src="res/pw.jpg">
                        <div class="contactbox-info">
                            <h1>Chang Phang Wei</h1>
                            <p>141047</p>
                        </div>
                    </div>
                    <div class="contactbox">
                        <img src="res/yingjie.JPG">
                        <div class="contactbox-info">
                            <h1>Khor Ying Jie</h1>
                            <p>141174</p>
                        </div>
                    </div>
                    <div class="contactbox">
                        <img src="res/haojie.png">
                        <div class="contactbox-info">
                            <h1>Wong Hao Jie</h1>
                            <p>142249</p>
                        </div>
                    </div>
                    <div class="contactbox">
                        <img src="res/michiko.jpg">
                        <div class="contactbox-info">
                            <h1>Chew Mi Chi Ko</h1>
                            <p>142649</p>
                        </div>
                    </div>
                    <div class="contactbox">
                        <img src="res/yeewei.jpg">
                        <div class="contactbox-info">
                            <h1>Ong Yee Wei</h1>
                            <p>142087</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- End of Contact Page-->

    <!-- Feedback Section Cover Page--->
    <section id = Feedback>
        <div class="topic1-inner">
            <div class="topic1-title" data-aos="fade-left">
                <h1><a href="#Feedback" class="r-link animated-underline animated-underline_type1 news__link">Feedback</a></h1>
            </div>
        </div>
        <div class="imgFeedback">
            <img src="res/feedBack.png">
        </div>
    </section>
    <!-- End of Feedback Section Cover Page--->

    <!-- Feedback Form and Footer--->
    <section id = "Feedback2">
        <?php if (strpos($_SESSION['user'], 'admin') === false):?>
            <?php echo"
            <form method='post' action='' class='form-feedback'>
        Feedback Form<br>
        <label><textarea name='feedback' placeholder='Enter your feedback' required></textarea></label><br>
        <div class='submitFeedback'>
            <button type='submit' name='submit'>Submit</button>
        </div>
        <div class='resetFeedback'>
            <button type='reset'>Clear</button>
        </div>
        </form>"; ?>
        <?php endif ?>
        <?php if (strpos($_SESSION['user'], 'admin') !== false):?>
            <?php
            $myfile = fopen("feedback.txt", "r") or die("Unable to open file!");
            echo fgets($myfile) . "<br>";
            if(feof($myfile))
                echo '(No feedback received yet)';
            else{
                // Output line by line until end-of-file
                while (!feof($myfile)) {
                    echo fgets($myfile) . "<br>";
                }
            }
            fclose($myfile);
            ?>
        <?php endif ?>
        <div class="footer">
            <div class = "left-col">
                <img src = "res/g8.png" alt="logo" class="logo">
                <p class="textBelow">&#0169; Created by Group 8 CPT211 All Rights Reserved</p>
            </div>

            <a class="backTop" href="#Home"> <i class="fas fa-arrow-up"></i> </a>
        </div>
    </section>
    <!-- End of Feedback Form and Footer--->

    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <script src="lazy-line-painter-1.9.6.min.js"></script>
    <script src="https://unpkg.com/aos@next/dist/aos.js"></script>
    <script>AOS.init();</script>
    <script src="main.js"></script>
</body>
</html>