<!DOCTYPE html>
<html lang="en">

<head>
    <title>Specialization in Information Systems at Umm Al Qura University</title>
    <meta charset="UTF-8">
    <link rel="stylesheet" href="css/style.css">
</head>
<body>
    <?php session_start(); ?>
    <ul>
        <li><a href="index.php" class="active">Information Systems</a></li>
        <li><a href="pages/register.php">Register</a></li>
        <?php if (isset($_SESSION['login'])) { ?>
            <li><a href="pages/logout.php">Sign out</a></li>
            <li><a href="pages/admin.php">Admin</a></li>
        <?php } else { ?>
            <li><a href="pages/login.php">Login</a></li>
        <?php } ?>
        <li><a href="pages/lectures.php">Lectures</a></li>
    </ul>

    <h1>Umm Al Qura University - Information Systems</h1>

    <h2>Profile</h2>
    <p>
        The College of Computer and Information Systems was established in Umm Al-Qura University in 1426H. The College has three
        academic departments: computer engineering, computer science and information systems; all of them are awarded a bachelor's
        degree, and the faculty offers a master's degree in computer engineering and science. The College is internationally
        accredited through its international academic accreditation (ABET). The faculty has 80 faculty members and 1045 students
        to achieve the vision and mission of the college.
    </p>
    <img src="img/um.jpg" width="100%;" />

    <h2>Message</h2>
    <p>
        Providing quality university education, pioneering research, and contributing to the service of the university and society.
    </p>

    <h2>Value</h2>
    <p>Our core values are quality and excellence, leadership and teamwork, academic freedom, justice and integrity, transparency
        and accountability, and continuous learning.</p>

    <h2>Goals</h2>
    <ol>
        <li>Preparing highly specialized national cadres in the fields of computer science and engineering and information systems.</li>
        <li>To develop and update the academic plans of the College in keeping with the global developments, with attention to
            the technical and applied aspects of the study programs and practical training.</li>
        <li>Increase the interest and encourage the scientific and technical skills of students, and qualify them according to
            their specialties.</li>
        <li>Provide the opportunity for distinguished graduates to complete their higher studies in the specialties of the college.</li>
        <li>Supporting and encouraging scientific research in all disciplines of the college, including technical and applied.</li>
    </ol>

    <h2>Department of Information Systems</h2>
    <p>
        The Kingdom of Saudi Arabia is currently undergoing a development phase aimed at settling all modern technologies to contribute
        to the growth and prosperity of the country at all levels and levels. One of the most important objectives that the
        Kingdom is striving to settle is to develop the organizational and skillful foundations to qualify the Saudi competencies
        to develop the latest technologies locally to serve future development plans and support the direction of the knowledge
        economy and the future vision of the Kingdom of Saudi Arabia. Arabiaəˈrābēə Definitions of Arabia noun a peninsula
        in southwestern Asia, largely desert, that lies between the Red Sea and the Persian Gulf and is bounded on the north
        by Jordan and Iraq. The original homeland of the Arabs and the historic center of Islam, it comprises the states
        of Saudi Arabia, Yemen, Oman, Bahrain, Kuwait, Qatar, and the United Arab Emirates. See also Saudi Arabia
    </p>

    <img src="img/information-systems.jpg" width="100%;" />
    <p>
        In this regard, the Faculty of Computer and Information Systems at Umm Al Qura University has been keen to provide the bachelor's
        degree in information systems in a manner that meets the needs in the labor market, so that the program covers areas
        of importance for IT staff, which in turn enhance skills not only basic, Which is required in the scope of building
        software systems at all levels, and thus the outputs of this program will be able to enhance creativity in the field
        of building Saudi software systems that mimic the quality of the global software systems.
    </p>

    <h2>Career Opportunities</h2>
    <ol style="float:left;">
        <li>System analysts and designers.</li>
        <li>Developers and designers of IT programs.</li>
        <li>Management of IT projects.</li>
        <li>IT Specialist.</li>
        <li>Support Technicians.</li>
        <li>Examiners / developers / IT planners.</li>
        <li>IT analysts / project managers.</li>
        <li>Testers / Developers / Local Business Intelligence.</li>
        <li>Designers / database developers and data warehouses.</li>
        <li>Network and Information Systems Administrators.</li>
        <li>Information systems planners / administrators and network security.</li>
    </ol>
    <img src="img/jobs.png" />
</body>

</html>