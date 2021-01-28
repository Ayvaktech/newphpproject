-- phpMyAdmin SQL Dump
-- version 4.8.3
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Apr 25, 2019 at 08:58 AM
-- Server version: 10.1.36-MariaDB
-- PHP Version: 7.2.10

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `job`
--

-- --------------------------------------------------------

--
-- Table structure for table `apply`
--

CREATE TABLE `apply` (
  `app_id` int(20) NOT NULL,
  `fname` varchar(100) NOT NULL,
  `cname` varchar(100) NOT NULL,
  `job_title` varchar(100) NOT NULL,
  `number` varchar(50) NOT NULL,
  `skill` varchar(100) NOT NULL,
  `exp` varchar(100) NOT NULL,
  `filename` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `apply`
--

INSERT INTO `apply` (`app_id`, `fname`, `cname`, `job_title`, `number`, `skill`, `exp`, `filename`) VALUES
(4, 'Chinju', 'HGS', 'Web Developer', '9656772110', 'PHP', '1 year ', 'Profile New.pdf');

-- --------------------------------------------------------

--
-- Table structure for table `blog`
--

CREATE TABLE `blog` (
  `id` int(11) NOT NULL,
  `title` varchar(100) DEFAULT NULL,
  `category` varchar(100) DEFAULT NULL,
  `description` text,
  `imgurl` varchar(500) DEFAULT NULL,
  `curdate` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `blog`
--

INSERT INTO `blog` (`id`, `title`, `category`, `description`, `imgurl`, `curdate`) VALUES
(1, '6 Facts You Need to Know About Glassdoor Jobseekers', 'Talent Acquisition', '<p>If you&rsquo;re visiting Glassdoor&rsquo;s blog, odds are that you&rsquo;re already somewhat familiar with who we are and what services we offer. But do you know the details about who makes up Glassdoor&rsquo;s user base, what their behaviours are and why they stand apart from other job site candidates? If not, it&rsquo;s time to brush up on your Glassdoor statistics &mdash; read on below!</p>\r\n\r\n<h3><strong>1. 78% of Glassdoor Candidates Have at Least 2 Years&rsquo; Experience</strong></h3>\r\n\r\n<p>Many recruiters and&nbsp;<a href=\"https://www.glassdoor.co.uk/employers/blog/how-to-coach-hiring-managers-through-the-5-steps-of-the-hiring-process/\">hiring managers</a>&nbsp;associate online job boards with inexperienced and unqualified candidates who apply indiscriminately to every job that catches their eye. But Glassdoor users aren&rsquo;t your average jobseekers &mdash;&nbsp;they tend to be uniquely high-quality and well-qualified. One reason is simply that they are experienced. With 78% of users already at least two years into their career, Glassdoor jobseekers know their way around the workplace &nbsp;&mdash; which often translates into greater mastery of skills, both hard and soft, as well as less time required to get fully up to speed.</p>\r\n\r\n<p>[Related:&nbsp;<a href=\"https://www.glassdoor.co.uk/employers/blog/hidden-costs-onboarding-new-employee-avoid/\">The Hidden Costs of Onboarding a New Employee (&amp; How to Avoid Them)</a>]</p>\r\n\r\n<h3><strong>2. 9 in 10 Glassdoor Candidates Have a University Degree</strong></h3>\r\n\r\n<p>Another indication of the high calibre of Glassdoor jobseekers: they&rsquo;re a well-educated bunch! Not only do the vast majority of Glassdoor candidates have university degrees &mdash; one in four has additional post-grad qualifications. So if many of your roles require&nbsp;<a href=\"https://www.glassdoor.co.uk/employers/resources/how-to-attract-world-class-tech-talent/\">advanced degrees or specialised skills</a>, Glassdoor might just be the perfect fit for your organisation&rsquo;s recruitment needs.</p>\r\n\r\n<h3><strong>3. The #1 Reason Users Visit Glassdoor Is to Search for/Apply to Jobs</strong></h3>\r\n\r\n<p>Upon hearing the word &ldquo;Glassdoor,&rdquo; many talent acquisition and recruitment professionals instantly think of the&nbsp;<a href=\"https://www.glassdoor.co.uk/employers/blog/how-to-respond-to-reviews-boost-your-brand/\">company reviews</a>&nbsp;they&rsquo;ve heard so much about. However, Glassdoor is more than just a review site &mdash; it&rsquo;s a full-service job and recruiting platform. Glassdoor candidates are often actively seeking new opportunities, with a full 80% of UK users saying the main reason they visit Glassdoor is to search and/or apply to open jobs. The result is a candidate pool that is both high quality and high intent &mdash; perfectly primed to learn more about your organisation and its opportunities.</p>\r\n\r\n<h3><strong>4. 73% of Glassdoor Users Are More Likely to Apply if the Employer Is Active on Glassdoor</strong></h3>\r\n\r\n<p>Glassdoor candidates aren&rsquo;t just applying to any old jobs, however. They&rsquo;re most interested in the organisations that are actively engaging on Glassdoor &mdash; for example, responding to reviews, regularly updating their profile and sharing updates on the culture and work environment. Glassdoor is a powerful, two-way platform, and the firms that embrace it to its fullest extent are able to use it to&nbsp;<a href=\"https://www.glassdoor.co.uk/employers/what-is-employer-branding/\">share their story</a>with candidates and, ultimately, persuade them to join their organisation.</p>\r\n\r\n<h3><strong>5. Glassdoor Hires Have a 30% Higher Retention Rate</strong></h3>\r\n\r\n<p>Because Glassdoor allows jobseekers an inside look at different companies, candidates are able to self-select into the roles and organisations that are truly the best fit for them. The result is informed candidates who arrive on the job with the right expectations and, as such, are more likely to stay. Given that the average cost of employee turnover is around&nbsp;<a href=\"https://croner.co.uk/culture-performance/cost-of-staff-turnover/\">&pound;11,000 per person</a>, it&rsquo;s clear that hiring candidates who stick around is imperative to your bottom line.</p>\r\n\r\n<h3><strong>6. Sponsored Jobs Receive 14X More Clicks &amp; 10X More Apply Starts Than Non-Sponsored Jobs</strong></h3>\r\n\r\n<p>By now, you know that Glassdoor candidates are highly qualified, highly motivated to apply to jobs and more likely to stay at a company than candidates from other sources. But what, you might wonder, is the best way to reach them? The answer:&nbsp;<a href=\"https://www.glassdoor.co.uk/post-job\">sponsoring your job listings</a>! While Glassdoor aggregates all of your open jobs to the site, sponsoring jobs makes them significantly more likely to appear in front of the right candidates in search results, email alerts and more.</p>\r\n\r\n<p>Want to learn even more about Glassdoor&rsquo;s audience, products and services?&nbsp;<a href=\"https://www.glassdoor.co.uk/employers/contact-sales/\">Contact our sales team</a>&nbsp;or look into&nbsp;<a href=\"https://www.glassdoor.co.uk/post-job\">posting jobs</a>&nbsp;&mdash; over 67 million unique users per month are waiting to hear from you!</p>\r\n', 'images.jpg', '2019-04-23 11:56:19'),
(2, '5 Tips to Compete for Top Talent When You Canâ€™t Pay Top Price', 'Job Advertising', '<p>For over two-thirds of people, money talks when it comes to accepting a job. Yet many recruiters just can&rsquo;t compete with other employers&rsquo; salary and benefits packages &mdash; a top recruiting pain point, according to a&nbsp;<a href=\"https://www.glassdoor.com/employers/blog/salary-benefits-survey/\">recent Glassdoor survey</a>.</p>\r\n\r\n<p>But what about organisations that can&rsquo;t compete with high compensation? Here are just a few ways to think outside the paycheque:</p>\r\n\r\n<h2><strong>Conduct a Pay Analysis</strong></h2>\r\n\r\n<p>How do you know if you&rsquo;re paying market value? There are many tools out there to assess if you are paying fairly for roles at your organisation, so make sure that you&rsquo;re utilising a source outside your own company to understand your compensation structure. Even a simple search using&nbsp;<a href=\"https://www.glassdoor.co.uk/Salaries/index.htm\">Glassdoor&rsquo;s salaries tool</a>&nbsp;can help you determine fair market rate for certain roles.</p>\r\n\r\n<p>[Related:&nbsp;<a href=\"https://www.glassdoor.co.uk/employers/resources/inside-the-mind-of-todays-job-seekers/\">Inside the Mind of Today&rsquo;s Job Seekers</a>]</p>\r\n\r\n<h2><strong>Compare to Others in Your Market</strong></h2>\r\n\r\n<p>Now that you&rsquo;ve determined you&rsquo;re paying fairly, find out how you rank compared to other companies you&rsquo;re competing with for talent. If they are paying above or below market value, that will be a point of discussion for candidates with multiple offers. Be prepared to openly discuss and answer questions on why you pay what you do, including how pay rises are determined within your company.</p>\r\n\r\n<h2><strong>Don&rsquo;t Forget About Perception</strong></h2>\r\n\r\n<p>If you find that you&rsquo;re paying fairly and are aligned with your competitors, it&rsquo;s important to ensure your employees know about it. What&rsquo;s your compensation &amp; benefits rating on Glassdoor? How do employees feel about their salaries? This is important because employees rank among the most trusted influences when communicating about their company&rsquo;s engagement and integrity, according to the Edelman Trust Barometer, Jan 2015. You might be doing compensation right, but if employees disagree, this could affect your employer brand.</p>\r\n\r\n<p>[Related:&nbsp;<a href=\"https://www.glassdoor.co.uk/employers/resources/employee-satisfaction-surveys/\">Employee Satisfaction Surveys</a>]</p>\r\n\r\n<h2><strong>Think Big Picture</strong></h2>\r\n\r\n<p>If your company can&rsquo;t afford to pay at the top of the market for talent, look at your total compensation package. Can you offer more or perhaps unlimited holiday time, do you have incredible benefits or unique perks that make life easier like&nbsp;<a href=\"https://www.glassdoor.co.uk/employers/blog/benefits-bringing-dog-work/\">dogs at work</a>&nbsp;or flexible schedules or commuter subsidies? Offerings like these carry monetary values that candidates take into consideration.</p>\r\n\r\n<h2><strong>Celebrate Your Strengths</strong></h2>\r\n\r\n<p>Remember that money isn&rsquo;t everything, and most people are looking for more than just a paycheque. A recent study by Glassdoor Economic Research found that when it comes to overall job and company satisfaction, salary is not among the leading contributing factors. Workplace factors that contribute more to overall satisfaction include&nbsp;<a href=\"https://www.glassdoor.co.uk/employers/resources/culture-codes-of-best-places-to-work/\">culture &amp; values</a>, career opportunities and trust in senior leadership. If you have higher ratings for these factors, celebrate those strengths with employees and candidates to highlight how fulfilled people are at your organisation. These factors matter in the long run and are key to helping retain the talent you&rsquo;ve worked so hard to effectively recruit.</p>\r\n\r\n<p>Remember, no two candidates are created equal, and we all want to be paid fairly, but at the end of the day, there are many attributes that make your organisation unique. It&rsquo;s a matter of determining what speaks to the individual candidate in order to sell them on your company.</p>\r\n', 'portfolio.jpg', '2019-04-23 12:03:23'),
(3, '7 Must-Ask Exit Interview Questions', 'Hiring & Recruiting', '<p>You know the saying &ldquo;Ignorance is bliss?&rdquo; Well, whoever said that was wrong. It should actually read &ldquo;Ignorance is bliss for a moment, then it bites you in the arse.&rdquo; There&rsquo;s no place where this is truer than&nbsp;<a href=\"https://www.glassdoor.co.uk/employers\" target=\"_blank\">HR professionals</a>&nbsp;discovering the true culture of their&nbsp;<a href=\"https://www.glassdoor.co.uk/Reviews/index.htm\" target=\"_blank\">company</a>. In a perfect world, the&nbsp;<a href=\"http://www.glassdoor.com/employers/blog/5-things-job-seekers-are-considering-when-it-comes-to-culture/\" target=\"_blank\">corporate culture</a>standards we set would trickle down to every employee and every aspect of the business, but that isn&rsquo;t usually the case. While it&rsquo;s imperative that we know our company from top to bottom, inside and out,&nbsp;<a href=\"https://www.glassdoor.co.uk/Job/jobs.htm?suggestCount=1&amp;suggestChosen=false&amp;clickSource=searchBtn&amp;typedKeyword=&amp;sc.keyword=hr+professional&amp;locT=&amp;locId=\" target=\"_blank\">HR professionals</a>&nbsp;sometimes aren&rsquo;t privy to what employees don&rsquo;t want us to know.</p>\r\n\r\n<p>It may be that employees could be reprimanded for what they don&rsquo;t want you to know, or it may just be that they don&rsquo;t want to hurt someone&rsquo;s feelings. No matter what the reason, what we don&rsquo;t know can hurt us and our company. The culture of your company may seem to be sunshine and rainbows, but may actually be an F5 tornado. When employees provide honest feedback, we can learn from it and improve.</p>\r\n\r\n<p>One of the best ways to get honest feedback is to ask employees who no longer rely on you for their livelihood. Exit interviews can reveal powerful insights that you wouldn&rsquo;t have access to otherwise. You can conduct exit interviews face to face, use a service like Survey Monkey, or&nbsp;<a href=\"https://www.glassdoor.co.uk/employers/resource/encourage-employee-feedback/\" target=\"_blank\">encourage company reviews</a>&nbsp;on Glassdoor. To make the most of exit interviews, utilise these seven questions.</p>\r\n\r\n<p><strong>Why did you begin looking for a new job?</strong></p>\r\n\r\n<p>Asking this question opens up the opportunity for a variety of answers. You may see that an employee simply needed a&nbsp;<a href=\"https://www.glassdoor.co.uk/Job/jobs.htm?sc.keyword=hr%20professional&amp;clickSource=tab&amp;\" target=\"_blank\">job</a>&nbsp;closer to home, or it may point to a specific instance or situation that sparked the search.</p>\r\n\r\n<p><strong>What ultimately led you to accept the new position?</strong></p>\r\n\r\n<p>This question will allow you to contrast your company&rsquo;s position with a different organisation&rsquo;s. The key to this answer is actually in what you don&rsquo;t see. For instance, if an employee indicates that they are leaving for higher pay, this could mean that your compensation package isn&rsquo;t competitive enough.</p>\r\n\r\n<p><strong>Did you feel that you were equipped to do your job well?</strong></p>\r\n\r\n<p>If you want a direct way to better retain the employee who fills this position next, ask this question. Be prepared for tales of technology woes, inadequate training and more, but also be prepared to gain valuable knowledge of what you can do better next time.</p>\r\n', 'scan0026.jpg', '2019-04-23 12:05:04'),
(4, 'What Recruiters Need to Know About the Gender Pay Gap in 2019', 'Hiring & Recruiting', '<p>With global attention on the gender pay gap over the past three years, it begs the question &ldquo;Has progress been made?&rdquo;</p>\r\n\r\n<p>According to new research from Glassdoor&rsquo;s Economic Research Team, there is evidence showing that the gap has narrowed slightly.&nbsp;The report,&nbsp;<a href=\"https://www.glassdoor.com/research/studies/gender-pay-gap-2019\"><em>Progress on the Gender Pay Gap: 2019</em></a>, reveals that although significant pay gaps remain between men and women, the pay gap has narrowed slightly in the UK, US, France and Australia, showing improvement since Glassdoor&rsquo;s&nbsp;<a href=\"https://www.glassdoor.com/about-us/glassdoor-research-confirms-significant-gender-pay-gap-uk-australia-germany-france/\">2016 study</a>. The 2019 study is based on more than half a million salary reports shared on Glassdoor by employees over the past three years, and includes pay data down to specific&nbsp;<em>job title</em>&nbsp;and&nbsp;<em>company name</em>.</p>\r\n\r\n<p>Today, the unadjusted pay gap between men and women in the UK is 17.9 percent, meaning women earn, on average, 82p for every &pound;1 men earn. This represents a 5.0 percentage point shrink in the unadjusted pay gap from three years ago, when women earned, on average, 77p for every &pound;1 men earn. When statistical controls are applied for worker and job characteristics, including worker age, education, years of experience, occupation, industry, location, year, &nbsp;company and job title, the pay gap in the UK today is 5.0 percent, revealing the adjusted pay gap. This is down one half of one percentage point from the 2016 adjusted pay gap (5.5 percent). The 2019 study finds similar differences between the unadjusted and adjusted pay gaps in each country analysed.</p>\r\n\r\n<p>&ldquo;Leveraging Glassdoor&rsquo;s unique salary and pay database, we&rsquo;re shining a light on the factors that explain the documented differences in pay between men and women and, perhaps more importantly, where unexplained barriers continue to slow the march toward pay equality,&rdquo;&nbsp;said Glassdoor Chief Economist Dr. Andrew Chamberlain.</p>\r\n', 'img2.jpg', '2019-04-23 12:07:48');

-- --------------------------------------------------------

--
-- Table structure for table `candidate_jobapp`
--

CREATE TABLE `candidate_jobapp` (
  `can_jobappid` int(11) NOT NULL,
  `candidate_ID` int(11) DEFAULT NULL,
  `job_id` int(11) DEFAULT NULL,
  `emp_id` int(11) DEFAULT NULL,
  `can_name` varchar(100) DEFAULT NULL,
  `can_email` varchar(100) DEFAULT NULL,
  `can_mob` varchar(100) DEFAULT NULL,
  `can_loc` varchar(100) DEFAULT NULL,
  `can_quali` varchar(100) DEFAULT NULL,
  `can_exp` varchar(100) DEFAULT NULL,
  `can_skill` varchar(100) DEFAULT NULL,
  `cjobstatus` varchar(100) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `candidate_jobapp`
--

INSERT INTO `candidate_jobapp` (`can_jobappid`, `candidate_ID`, `job_id`, `emp_id`, `can_name`, `can_email`, `can_mob`, `can_loc`, `can_quali`, `can_exp`, `can_skill`, `cjobstatus`) VALUES
(2, 9, 13, NULL, '', '', '', '', '', '', '', 'completed'),
(4, 9, 16, NULL, 'matheen', 'matheen@gmail.com', '9738326611', 'hyderabad', 'MCA', '1', 'php', 'completed'),
(5, 9, 14, NULL, 'matheen', 'matheen@gmail.com', '9738326611', 'hyderabad', 'MCA', '1', 'php', 'completed'),
(8, 8, 16, NULL, 'Sneha', 'sneha@gmail.com', '2345678901', 'Bangalore', 'M-Tech', '9', 'MBA', 'pending'),
(10, 8, 16, 4, 'Sneha', 'sneha@gmail.com', '2345678901', 'Bangalore', 'M-Tech', '9', 'MBA', 'pending'),
(12, 10, 22, 1, 'bharath', 'bhar@gmail.com', '9738333266', 'bangalore', 'B-Tech', '0', 'communication', 'completed'),
(13, 10, 22, 1, 'bharath', 'bhar@gmail.com', '9738333266', 'bangalore', 'B-Tech', '0', 'communication', 'completed'),
(14, 8, 23, 3, 'Sneha', 'sneha@gmail.com', '2345678901', 'Bangalore', 'M-Tech', '9', 'MBA', 'pending'),
(15, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 'pending'),
(18, 9, 21, 1, 'matheen', 'matheen@gmail.com', '9738326611', 'hyderabad', 'MCA', '1', 'php', 'completed'),
(19, 9, 21, 1, 'matheen', 'matheen@gmail.com', '9738326611', 'hyderabad', 'MCA', '1', 'php', 'completed'),
(20, 9, 18, 2, 'matheen', 'matheen@gmail.com', '9738326611', 'hyderabad', 'MCA', '1', 'php', 'completed'),
(21, 3, 24, 3, 'Chinju', 'thomaschinnu1@gmail.com', '2345678901', 'Bangalore', 'CFA', '14', 'PHP', 'pending'),
(22, 3, 23, 3, 'Chinju', 'thomaschinnu1@gmail.com', '2345678901', 'Bangalore', 'CFA', '14', 'PHP', 'pending'),
(23, 10, 18, 2, 'bharath', 'bhar@gmail.com', '9738333266', 'bangalore', 'B-Tech', '0', 'communication', 'completed'),
(26, 10, 18, 2, 'bharath', 'bhar@gmail.com', '9738333266', 'bangalore', 'B-Tech', '0', 'communication', 'completed'),
(27, 11, 16, 4, 'Arun', 'arun@gmail.com', '9656772110', 'Mysore', 'MBA', '16', 'MBA', 'pending'),
(28, 9, 31, 4, 'matheen', 'matheen@gmail.com', '9738326611', 'hyderabad', 'MCA', '1', 'php', 'completed'),
(30, 9, 16, 4, 'matheen', 'matheen@gmail.com', '9738326611', 'hyderabad', 'MCA', '1', 'php', 'pending'),
(31, 9, 18, 2, 'matheen', 'matheen@gmail.com', '9738326611', 'hyderabad', 'MCA', '1', 'php', 'pending'),
(32, 9, 25, 2, 'matheen', 'matheen@gmail.com', '9738326611', 'hyderabad', 'MCA', '1', 'php', 'pending'),
(38, 22, 25, 2, 'matheen ulla', 'matheenulla6@gmail.com', '9738321465', 'pune', 'PGDCA', '1', 'php', 'completed');

-- --------------------------------------------------------

--
-- Table structure for table `can_job_status`
--

CREATE TABLE `can_job_status` (
  `statusid` int(11) NOT NULL,
  `canid` int(11) DEFAULT NULL,
  `Int_date` date DEFAULT NULL,
  `Int_timee` varchar(100) DEFAULT NULL,
  `address` varchar(100) DEFAULT NULL,
  `description` varchar(100) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `can_job_status`
--

INSERT INTO `can_job_status` (`statusid`, `canid`, `Int_date`, `Int_timee`, `address`, `description`) VALUES
(1, 8, '2019-03-14', '11AM', '    hello                                             \r\n                                            ', 'hello                                                       \r\n                                      '),
(2, 8, '2019-03-16', '12AM', 'bangalore 560068                                                       \r\n                           ', 'hi grab the oppurtunitty                                                       \r\n                   '),
(3, 3, '2019-03-15', '12AM', 'any brANCH ACROSS INDIA         ', 'BRING THE DOCUMENT                               \r\n                                                 '),
(4, 8, '2019-03-15', '1am', 'demo                                                       \r\n                                       ', 'demo                                                       \r\n                                       '),
(5, 10, '2019-03-20', '10AM', 'channakeshav a nagar\r\n                                                   ', '    hello                                                    \r\n                                     '),
(6, 10, '2019-03-20', '10:30am', 'Electronic City                                                       \r\n                            ', 'Welcome                                                       \r\n                                    '),
(7, 9, '2019-03-31', '11AM', '  any place in bangaore                                                     \r\n                      ', 'dsjfh                                                       \r\n                                      '),
(8, 22, '2019-04-17', '11AM', '     sdkfh                                                  \r\n                                      ', 'skhd                                                       \r\n                                       ');

-- --------------------------------------------------------

--
-- Table structure for table `can_login`
--

CREATE TABLE `can_login` (
  `login_id` int(20) NOT NULL,
  `name` varchar(100) NOT NULL,
  `password` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `can_login`
--

INSERT INTO `can_login` (`login_id`, `name`, `password`) VALUES
(1, '', 'chinchu'),
(2, 'Chinchu', 'chinchu');

-- --------------------------------------------------------

--
-- Table structure for table `can_reg`
--

CREATE TABLE `can_reg` (
  `can_id` int(10) NOT NULL,
  `name` varchar(100) NOT NULL,
  `email` varchar(100) NOT NULL,
  `password` varchar(100) NOT NULL,
  `password1` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `can_reg`
--

INSERT INTO `can_reg` (`can_id`, `name`, `email`, `password`, `password1`) VALUES
(2, 'Chinchu', 'chi@gmail.com', 'chinchu', 'chinchu');

-- --------------------------------------------------------

--
-- Table structure for table `comp_reg`
--

CREATE TABLE `comp_reg` (
  `com_id` int(20) NOT NULL,
  `cname` varchar(100) NOT NULL,
  `business` varchar(100) NOT NULL,
  `number` varchar(30) NOT NULL,
  `address` varchar(500) NOT NULL,
  `url` varchar(200) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `comp_reg`
--

INSERT INTO `comp_reg` (`com_id`, `cname`, `business`, `number`, `address`, `url`) VALUES
(1, 'Tricky Global Solution', 'Software Development', '1234567890', 'Hosa Road, Bangalore', 'https://www.trickysolution.com'),
(2, 'Tricky', 'Web Development', '9656772110', 'qwer', 'https://www.trickysolution.com');

-- --------------------------------------------------------

--
-- Table structure for table `createcv`
--

CREATE TABLE `createcv` (
  `cv_id` int(20) NOT NULL,
  `fname` varchar(50) NOT NULL,
  `email` varchar(50) NOT NULL,
  `pass` varchar(100) NOT NULL,
  `number` varchar(100) NOT NULL,
  `location` varchar(100) NOT NULL,
  `qual` varchar(100) NOT NULL,
  `exp` varchar(100) NOT NULL,
  `month` varchar(30) NOT NULL,
  `industry` varchar(100) NOT NULL,
  `job_fun` varchar(100) NOT NULL,
  `skill` varchar(100) NOT NULL,
  `des` varchar(100) NOT NULL,
  `filename` varchar(200) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `createcv`
--

INSERT INTO `createcv` (`cv_id`, `fname`, `email`, `pass`, `number`, `location`, `qual`, `exp`, `month`, `industry`, `job_fun`, `skill`, `des`, `filename`) VALUES
(5, 'John', 'johnjac215@gmail.com', 'chinju', '2345678901', 'Bangalore', 'CFA', '16', '9', 'Building Materials', 'Administration', 'Marketing', 'qqqq', 'New Text Document.txt');

-- --------------------------------------------------------

--
-- Table structure for table `create_resume`
--

CREATE TABLE `create_resume` (
  `resume_id` int(20) NOT NULL,
  `name` varchar(50) NOT NULL,
  `email` varchar(50) NOT NULL,
  `phone` varchar(30) NOT NULL,
  `dob` varchar(30) NOT NULL,
  `city` varchar(30) NOT NULL,
  `education` varchar(30) NOT NULL,
  `experience` varchar(20) NOT NULL,
  `skill` varchar(30) NOT NULL,
  `address` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `create_resume`
--

INSERT INTO `create_resume` (`resume_id`, `name`, `email`, `phone`, `dob`, `city`, `education`, `experience`, `skill`, `address`) VALUES
(1, 'Chinchu', 'thomaschinnu1@gmail.com', '9878987678', '09/03/1990', 'Venmoney', 'BE', '5 Year', 'MBA', 'vdfgdfg');

-- --------------------------------------------------------

--
-- Table structure for table `emp_login`
--

CREATE TABLE `emp_login` (
  `login_id` int(20) NOT NULL,
  `name` varchar(100) NOT NULL,
  `password` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `emp_login`
--

INSERT INTO `emp_login` (`login_id`, `name`, `password`) VALUES
(1, 'Chinju', 'chinchu'),
(2, 'Chinju', 'chinchu'),
(3, 'Anu', 'anu'),
(4, 'Anu', 'anu');

-- --------------------------------------------------------

--
-- Table structure for table `emp_reg`
--

CREATE TABLE `emp_reg` (
  `emp_id` int(20) NOT NULL,
  `name` varchar(100) NOT NULL,
  `email` varchar(100) NOT NULL,
  `mobile` varchar(100) DEFAULT NULL,
  `password` varchar(100) NOT NULL,
  `emp_profile` varchar(100) DEFAULT NULL,
  `location` varchar(100) DEFAULT NULL,
  `cmp_name` varchar(100) DEFAULT NULL,
  `cmp_address` varchar(100) DEFAULT NULL,
  `abt_company` varchar(100) DEFAULT NULL,
  `emp_image` varchar(100) DEFAULT NULL,
  `PaymentStatus` varchar(100) DEFAULT NULL,
  `regdate` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `totaljobslot` varchar(100) DEFAULT NULL,
  `amount` varchar(100) DEFAULT NULL,
  `paymeny_id` varchar(500) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `emp_reg`
--

INSERT INTO `emp_reg` (`emp_id`, `name`, `email`, `mobile`, `password`, `emp_profile`, `location`, `cmp_name`, `cmp_address`, `abt_company`, `emp_image`, `PaymentStatus`, `regdate`, `totaljobslot`, `amount`, `paymeny_id`) VALUES
(1, 'Chinju', 'c@gmail.com', '7412589630', 'chinchu', NULL, 'bangalore', 'TGS company', 'hosa road bangalore', 'this is for testing', NULL, 'pending', '2019-04-24 11:21:14', '0', '000', 'none'),
(2, 'matheen', 'matheen@gmail.com', '9738326611', '12345', NULL, 'bangalore', '$cal-info', 'bangalore 560068', 'hello ', NULL, 'paid', '2019-04-24 11:21:14', '3 jobs slot', '299', 'pay_CNn65dmcc37U9d'),
(3, 'matheenemp', 'emp@gmail.com', '7412589630', '12345', 'software developer', 'bangalore', 'tricky global solution', 'hosa road', 'this is for testng purpose this is for testng purpose this is for testng purpose', 'ak.jpeg', 'pending', '2019-04-24 11:21:14', '0', '000', 'none'),
(4, 'krish', 'krish@gmail.com', '1234567890', '12345', 'HR', 'chennai', 'TGS', 'electronic city bangaore 560078', 'this is for testng purpose this is for testng purpose this is for testng purpose', 'images.jpg', 'pending', '2019-04-24 11:21:14', '0', '000', 'none'),
(5, 'abdulla', 'abu@gmail.com', '741258963789', '12345', 'hello', 'bangalore', 'data analyst', 'jasd', 'hdsg', 'ganesh1.jpg', 'paid', '2019-04-24 11:21:14', '3 jobs slot', '299', 'pay_CNnPHr6JgqBiTQ'),
(6, 'deepa', 'deepa@gmail.com', '6985201345', '12345', 'software developer', 'bangalore', 'TGS', '#23/1 sahara building', 'this is for testing', 'img2.jpg', 'pending', '2019-04-24 11:24:44', '0', '000', 'none');

-- --------------------------------------------------------

--
-- Table structure for table `freelancer_details`
--

CREATE TABLE `freelancer_details` (
  `FdetailsID` int(11) NOT NULL,
  `ID` int(11) DEFAULT NULL,
  `FreProfile` varchar(100) DEFAULT NULL,
  `Experience` varchar(100) DEFAULT NULL,
  `Frestatus` varchar(100) DEFAULT NULL,
  `Age` varchar(100) DEFAULT NULL,
  `location` varchar(100) DEFAULT NULL,
  `description` varchar(200) DEFAULT NULL,
  `ImageUrl` varchar(200) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `freelancer_details`
--

INSERT INTO `freelancer_details` (`FdetailsID`, `ID`, `FreProfile`, `Experience`, `Frestatus`, `Age`, `location`, `description`, `ImageUrl`) VALUES
(1, 19, 'php developer', '1', 'Available', '25', ' Bangalore', 'this is for testing', ''),
(2, 20, 'java devloper', '2', 'Available', '24', ' bangalore', 'this for demo', '4.jpg'),
(3, 21, 'android developer', '2', 'Available', '23', ' bangaore', 'this for testing', '3.jpg'),
(5, 23, 'Network engineer', '8', 'Working', '35', ' hyderabad', 'hi this for testing hi this for testing ', '1.jpg'),
(6, 24, 'web desiner', '2', 'Available', '25', ' kerala', 'hi this for demo ', '2.jpg'),
(7, 25, 'mis developer', '5', 'Working', '35', ' tamil nadu', 'demo', '1411837943224.jpg'),
(8, 26, 'HTML devleoper', '4', 'Working', '15', ' bangakore', 'this is for demo', '3.jpg'),
(9, 27, 'java developer', '1', 'Available', '25', ' Market', 'fkjfj', '4.jpg'),
(10, 28, 'pharma developer', '5', 'Working', '26', ' Mangalore', 'hi this is for demo', ''),
(11, 29, 'full stack developer', '2', 'Available', '25', ' bangalore', 'dhfkhd', ''),
(14, 34, 'core php developer', '20', 'Working', '18', ' bangalore', 'kjhfsdf', ''),
(15, 35, 'kk', '6', 'Working', '45', ' mm', 'lmm', ''),
(17, 37, 'hybrid', '1', 'Available', '12', ' london', 'fhg', ''),
(20, 42, 'phpp develope', '1', 'Available', '1', ' dshgf', 'ke', '');

-- --------------------------------------------------------

--
-- Table structure for table `freelancer_jobapplication`
--

CREATE TABLE `freelancer_jobapplication` (
  `appID` int(11) NOT NULL,
  `jobID` int(11) DEFAULT NULL,
  `emp_id` int(11) DEFAULT NULL,
  `Freelancer_ID` int(11) DEFAULT NULL,
  `free_name` varchar(100) DEFAULT NULL,
  `free_email` varchar(100) DEFAULT NULL,
  `company_name` varchar(100) DEFAULT NULL,
  `job_title` varchar(100) DEFAULT NULL,
  `job_skill` varchar(100) DEFAULT NULL,
  `job_exp` varchar(100) DEFAULT NULL,
  `city` varchar(100) DEFAULT NULL,
  `fjobstatus` varchar(100) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `freelancer_jobapplication`
--

INSERT INTO `freelancer_jobapplication` (`appID`, `jobID`, `emp_id`, `Freelancer_ID`, `free_name`, `free_email`, `company_name`, `job_title`, `job_skill`, `job_exp`, `city`, `fjobstatus`) VALUES
(2, 13, NULL, 23, 'faisa', 'faisa@gmail.com', 'HGS', 'Software Developer', 'Java', '2 Year', 'Bangalore', 'pending'),
(3, 13, NULL, 23, 'faisa', 'faisa@gmail.com', 'HGS', 'Software Developer', 'Java', '2 Year', 'Bangalore', 'pending'),
(4, 14, NULL, 25, 'tou', 'tou@gmail.com', 'Wipro', 'HR', 'MBA', '5 Year', 'Calicut', 'pending'),
(5, 13, NULL, 21, 'bash', 'bash@gmail.com', 'HGS', 'Software Developer', 'Java', '2 Year', 'Bangalore', 'pending'),
(6, 14, NULL, 28, 'maqbu', 'maqbul@gmail.com', 'Wipro', 'HR', 'MBA', '5 Year', 'Calicut', 'pending'),
(7, 13, NULL, 23, 'faisa', 'faisa@gmail.com', 'HGS', 'Software Developer', 'Java', '2 Year', 'Bangalore', 'pending'),
(8, 14, NULL, 23, 'faisa', 'faisa@gmail.com', 'Wipro', 'HR', 'MBA', '5 Year', 'Calicut', 'pending'),
(11, 22, 1, 25, 'tou', 'tou@gmail.com', 'xyz company', 'software testing', 'java and netbeans', '2', 'bangalore', 'pending'),
(12, 23, 3, 6, 'subhash', 'su@123', 'my demo company', 'html developer', 'html and css', '1+', 'bangalore', 'pending'),
(13, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 'pending'),
(17, 16, 4, 24, 'rosh', 'rosh@gmail.com', 'accenture', 'software developer', 'php and java', '2', 'bangalore', 'pending'),
(22, 21, 1, 24, 'rosh', 'rosh@gmail.com', 'xyz company', 'software testing', 'java and netbeans', '2', 'bangalore', 'pending'),
(23, 24, 3, 23, 'faisa', 'faisa@gmail.com', 'last comapany', 'development profile', 'any developer', '2', 'kolkata', 'pending'),
(24, 23, 3, 23, 'faisa', 'faisa@gmail.com', 'my demo company', 'html developer', 'html and css', '1+', 'bangalore', 'pending');

-- --------------------------------------------------------

--
-- Table structure for table `freelance_register`
--

CREATE TABLE `freelance_register` (
  `ID` int(11) NOT NULL,
  `Full_name` varchar(255) NOT NULL,
  `username` varchar(255) NOT NULL,
  `Email` varchar(255) NOT NULL,
  `Password` varchar(255) NOT NULL,
  `ConfirmPass` varchar(255) NOT NULL,
  `register_with` varchar(100) DEFAULT NULL,
  `reg_details` varchar(100) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `freelance_register`
--

INSERT INTO `freelance_register` (`ID`, `Full_name`, `username`, `Email`, `Password`, `ConfirmPass`, `register_with`, `reg_details`) VALUES
(1, 'matheen', 'matheen@gmail.com', 'matheen@gmail.com', '12345', '12345', 'portal', 'completed'),
(2, 'testing', 'testing', 'testing@gmail.com', '12345', '12345', 'portal', 'completed'),
(3, 'testing2', '2test', 'test@gmail.com', '123456', '123456', 'portal', 'completed'),
(4, 'testing3', '3test', 'tes3@gmail.com', '12345', '12345', 'portal', 'completed'),
(5, 'hello', 'hello', 'hello@gmail.com', '12345', '12345', 'portal', 'completed'),
(6, 'subhash', 'su@123', 'su@123', '12345', '12345', 'portal', 'completed'),
(7, 'subhash1', 'as', 'as@gmail.com', '12345', '12345', 'portal', 'completed'),
(8, 'testing4', 'qw', 'wq@gmail.com', '12344', '12345', 'portal', 'completed'),
(9, '1234', '12qw', '12@gmail.com', '12345', '12345', 'portal', 'completed'),
(10, 'qs', 'as', 'qs@gmail.com', '12345', '12345', 'portal', 'completed'),
(11, 'qwe', 'qwe', 'qwe@gmail.com', '12345', '12345', 'portal', 'completed'),
(12, 'testing5', '5', '5@gmail.com', '123', '1213', 'portal', 'completed'),
(13, 'police', 'po', 'po@gmail.com', '12345', '12354', 'portal', 'completed'),
(14, 'sha', 'sha', 'sha@gmail.com', '12345', '12345', 'portal', 'completed'),
(15, 'sha1', 'sha1', '123@gmail.com', '12345', '12345', 'portal', 'completed'),
(16, 'hi', 'hi12', 'hi12@gmail.com', '12345', '12345', 'portal', 'completed'),
(17, 'iu', 'iu', 'iu@gmail.com', '12345', '12345', 'portal', 'completed'),
(18, 'fai', 'fai', 'fai@gmail.com', '12345', '12345', 'portal', 'completed'),
(19, 'sad', 'sad', 'sad@gmail.com', '12345', '12345', 'portal', 'completed'),
(20, '123hello', 'gello', '12qa@gmail.com', '123456', '123456', 'portal', 'completed'),
(21, 'bash', 'bash', 'bash@gmail.com', '12345', '12345', 'portal', 'completed'),
(22, 'demo', 'demo123', 'demo1234@gmail.com', '12345', '12345', 'portal', 'completed'),
(23, 'faisa', 'faisa@12', 'faisa@gmail.com', '12345', '12345', 'portal', 'completed'),
(24, 'rosh', 'rosh12', 'rosh@gmail.com', '12345', '12345', 'portal', 'completed'),
(25, 'tou', 'tou', 'tou@gmail.com', '12345', '12345', 'portal', 'completed'),
(26, 'tousha', 'tousha', 'tousha@gmail.com', '12345', '12345', 'portal', 'completed'),
(27, 'sadiq', 'sadi', 'sadi@gmail.com', '12345', '12345', 'portal', 'completed'),
(28, 'maqbu', 'maqbu', 'maqbul@gmail.com', '12345', '12345', 'portal', 'completed'),
(29, 'abdul', 'abdul', 'abdul@gmail.com', '12345', '12345', 'portal', 'completed'),
(34, 'matheen ulla', '', 'matheenulla6@gmail.com', '', '', 'google', 'completed'),
(35, 'Bharath Raj', '', 'bharathr404@gmail.com', '', '', 'google', 'completed'),
(37, 'demoing', 'demoi', 'demoing@gmail.com', '12345', '12345', 'portal', 'completed'),
(39, 'deepa', 'deepa', 'deepa@gmail.com', 'deepa', 'deepa', 'portal', 'pending'),
(40, 'deepa', 'deepa', 'deepa@gmail.com', 'deepa', 'deepa', 'portal', 'pending'),
(42, 'MatheenShariff', '', 'matheenshariff394@gmail.com', '', '', 'Facebook', 'completed');

-- --------------------------------------------------------

--
-- Table structure for table `google`
--

CREATE TABLE `google` (
  `id` int(11) NOT NULL,
  `name` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8;

--
-- Dumping data for table `google`
--

INSERT INTO `google` (`id`, `name`, `email`) VALUES
(1, 'matheen ulla', 'matheenulla6@gmail.com'),
(2, 'Bharath Raj', 'bharathr404@gmail.com');

-- --------------------------------------------------------

--
-- Table structure for table `job_city`
--

CREATE TABLE `job_city` (
  `job_city_id` int(20) NOT NULL,
  `city` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `job_city`
--

INSERT INTO `job_city` (`job_city_id`, `city`) VALUES
(1, 'Bangalore'),
(2, 'Kolkata'),
(3, 'Idukki'),
(4, 'bangalore'),
(5, 'hydrabad'),
(6, 'mysore'),
(7, 'chanaai'),
(8, 'pune'),
(9, 'belagavi'),
(10, 'haveri'),
(11, 'hydrabad'),
(12, 'hariyana'),
(13, 'bangalore'),
(14, 'belagavi'),
(15, 'hubli'),
(16, 'bangalore'),
(17, 'ranchi'),
(18, 'belagavi'),
(19, 'mysore'),
(20, 'bangalore'),
(21, 'bangalore'),
(22, 'bangalore');

-- --------------------------------------------------------

--
-- Table structure for table `job_company`
--

CREATE TABLE `job_company` (
  `job_com_id` int(20) NOT NULL,
  `cname` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `job_company`
--

INSERT INTO `job_company` (`job_com_id`, `cname`) VALUES
(1, 'Hatchex'),
(2, 'HGS'),
(3, 'Wipro'),
(4, 'infosys'),
(5, 'accenture'),
(6, 'TGS'),
(7, 'tgs pvt ltd'),
(8, 'hcl pvt ltd'),
(9, 'jkk pvt ltd'),
(10, 'fdad pvt ltd'),
(11, 'fgh pvt ltd'),
(12, 'dsf pvt ltd'),
(13, 'srf pvt ltd'),
(14, 'gfd pvt ltd'),
(15, 'vxv pvt ltd'),
(16, 'kjh ltd'),
(17, 'hgs pvt ltd'),
(18, 'adk'),
(19, 'jsj'),
(20, ''),
(21, 'jkk pvt ltd'),
(22, 'fdad pvt ltd'),
(23, 'tricky global solution'),
(24, 'oil solution'),
(25, 'oil solution');

-- --------------------------------------------------------

--
-- Table structure for table `job_position`
--

CREATE TABLE `job_position` (
  `id` int(11) NOT NULL,
  `position` varchar(100) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `job_position`
--

INSERT INTO `job_position` (`id`, `position`) VALUES
(1, 'Full Time Job'),
(2, 'Contract Job'),
(3, 'Part Time Job');

-- --------------------------------------------------------

--
-- Table structure for table `job_reg`
--

CREATE TABLE `job_reg` (
  `job_id` int(20) NOT NULL,
  `emp_id` int(11) DEFAULT NULL,
  `cname` varchar(100) NOT NULL,
  `jobtitle` varchar(100) NOT NULL,
  `skill` varchar(100) NOT NULL,
  `experience` varchar(100) NOT NULL,
  `salary` varchar(100) NOT NULL,
  `city` varchar(100) NOT NULL,
  `pos` varchar(30) NOT NULL,
  `img_filename` varchar(100) NOT NULL,
  `description` varchar(200) NOT NULL,
  `age` varchar(20) NOT NULL,
  `lang` varchar(50) NOT NULL,
  `jobregdte` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `job_reg`
--

INSERT INTO `job_reg` (`job_id`, `emp_id`, `cname`, `jobtitle`, `skill`, `experience`, `salary`, `city`, `pos`, `img_filename`, `description`, `age`, `lang`, `jobregdte`) VALUES
(13, NULL, 'HGS', 'Accountancy', 'Java', '2 Year', '15000', 'Bangalore', 'Full Time Job', 'Desert.jpg', 'Lorem Ipsum is simply dummy text of the printing and typesetting industry. ', '32', 'English,Kannada', '2019-04-24 11:31:27'),
(14, NULL, 'Wipro', 'Administration', 'MBA', '5 Year', '50000', 'Calicut', 'Full Time Job', 'Lighthouse.jpg', 'Lorem Ipsum is simply dummy text of the printing and typesetting industry. ', '25', 'Tamil', '2019-04-24 11:31:27'),
(15, NULL, 'infosys', 'Engineering', 'php', '2', '12300', 'bangalore', 'Contract Job', '6ak.jpeg', 'this is for testing', '15', 'kannada hindi ', '2019-04-24 11:31:27'),
(16, 4, 'accenture', 'HR', 'php and java', '2', '12300', 'bangalore', 'Full Time Job', '7ak.jpeg', 'this is for testing and demo', '23', 'hindi and kannada', '2019-04-24 11:31:27'),
(18, 2, 'demo company', 'IT', 'android studio', '1', '33000', 'bangalore', 'Full Time Job', 'office.jpg', 'hello hope you are doing good', '20', 'English', '2019-04-24 11:31:27'),
(21, 1, 'xyz company', 'Marketing', 'java', '2', '12000', 'bangalore', 'Full Time Job', 'Koala.jpg', 'hi freshers there is a good job oppurtunity best of luck ', '15', 'english ', '2019-04-24 11:31:27'),
(22, 1, 'xyz company', 'Sales', 'java', '2', '12000', 'bangalore', 'Full Time Job', '2Koala.jpg', 'hi freshers there is a good job oppurtunity best of luck ', '15', 'english ', '2019-04-24 11:31:27'),
(23, 3, 'my demo company', 'Teaching', 'html and css', '1+', '15000', 'bangalore', 'Full Time Job', 'Hydrangeas.jpg', 'hello go for it', '20+', 'english', '2019-04-24 11:31:27'),
(24, 3, 'last comapany', 'Tourism', 'any developer', '2', '12000', 'kolkata', 'Full Time Job', 'Penguins.jpg', 'this forkolkata job', '21', 'english', '2019-04-24 11:31:27'),
(25, 2, 'Hatchex', 'Accountancy', 'MBA', '2 Year', '15000', 'Bangalore', 'Contract Job', '2Hydrangeas.jpg', 'des', '56', 'Tamil', '2019-04-24 11:31:27'),
(27, 4, 'TGS', 'Education', 'MBA', '2 Year', '15000', 'Idukki', 'Contract Job', '4Desert.jpg', 'des', '34', 'Tamil', '2019-04-24 11:31:27'),
(28, 4, 'tgs pvt ltd', 'Advertising ', 'web design', '1 year', '10000', 'bangalore', 'Full Time Job', '22.jpg', 'description', '23', 'kannada', '2019-04-24 11:31:27'),
(29, 4, 'hcl pvt ltd', 'Aerospace', 'core java', '1 year', '10000', 'hydrabad', 'Full Time Job', '1.jpg', 'description', '24', 'hindi', '2019-04-24 11:31:27'),
(30, 4, 'jkk pvt ltd', 'Apprenticeships ', 'spring,hibernet', '2 years', '15000', 'mysore', 'Full Time Job', '3.jpg', '', '24', 'kannada', '2019-04-24 11:31:27'),
(31, 4, 'fdad pvt ltd', 'Automotive', 'servlet jsp', '1 year', '10000', 'chanaai', 'Part Time Job', '4.jpg', 'description', '26', 'marathi', '2019-04-24 11:31:27'),
(32, 4, 'fgh pvt ltd', 'Banking', 'sql', '2 years', '10000', 'pune', 'Full Time Job', '5.jpg', 'description', '23', 'marathi', '2019-04-24 11:31:27'),
(33, 4, 'dsf pvt ltd', 'Call Centre', 'java', '2 years', '15000', 'belagavi', 'Full Time Job', '6.jpg', 'description', '27', 'english', '2019-04-24 11:31:27'),
(34, 4, 'srf pvt ltd', 'Catering ', 'core java', '3 year', '20000', 'haveri', 'Contract Job', '7.jpg', 'description', '27', 'kannada', '2019-04-24 11:31:27'),
(35, 4, 'gfd pvt ltd', 'Charity', 'web design', '2 years', '10000', 'hydrabad', 'Full Time Job', '21.jpg', 'description', '27', 'kannada', '2019-04-24 11:31:27'),
(36, 4, 'vxv pvt ltd', 'Construction', 'auto cad', '1 year', '15000', 'hariyana', 'Full Time Job', '32.jpg', 'description', '27', 'hindi', '2019-04-24 11:31:27'),
(37, 4, 'kjh ltd', 'Creative', 'animation', '1 year', '10000', 'bangalore', 'Full Time Job', '23.jpg', '', '23', 'kannada', '2019-04-24 11:31:27'),
(38, 4, 'hgs pvt ltd', 'Customer Service', '', '4 years', '20000', 'belagavi', 'Full Time Job', '42.jpg', '', '27', 'english', '2019-04-24 11:31:27'),
(39, 4, 'adk', 'Digital', 'digital marketing', '2 years', '25000', 'hubli', 'Full Time Job', '33.jpg', 'description', '27', 'hindi', '2019-04-24 11:31:27'),
(40, 4, 'jsj', 'Engineering', 'microcontroller', '1 year', '10000', 'bangalore', 'Contract Job', '25.jpg', 'description', '26', 'hindi', '2019-04-24 11:31:27'),
(41, 4, '', 'Finance', 'sjka', '1 year', '10000', 'ranchi', 'Contract Job', '27.jpg', 'description', '24', 'english', '2019-04-24 11:31:27'),
(42, 4, 'jkk pvt ltd', 'FMCG', 'sql', '2 years', '10000', 'belagavi', 'Full Time Job', '35.jpg', 'description', '24', 'english', '2019-04-24 11:31:27'),
(43, 4, 'fdad pvt ltd', 'Graduate', 'sql', '2 years', '10000', 'mysore', 'Contract Job', '45.jpg', 'description', '23', 'english', '2019-04-24 11:31:27'),
(45, 5, 'oil solution', 'dot net developer', 'asp.net', '5', '14500', 'bangalore', 'Full Time Job', '', '<p><strong>welcome to dot net deveeloper</strong></p>\r\n\r\n<p>&nbsp;</p>\r\n', '20', 'english', '2019-04-25 06:53:36'),
(46, 5, 'oil solution', 'HR MANAGAGRE', 'GOOD COMMUNICATION SKILL', '1 -2 ', '25000', 'bangalore', 'Full Time Job', 'portfolio.jpg', '<p><strong>this is for testing</strong></p>\r\n', '25', 'english', '2019-04-25 06:56:01');

-- --------------------------------------------------------

--
-- Table structure for table `job_title`
--

CREATE TABLE `job_title` (
  `job_title_id` int(20) NOT NULL,
  `jobtitle` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `job_title`
--

INSERT INTO `job_title` (`job_title_id`, `jobtitle`) VALUES
(1, 'Accountancy'),
(2, 'HR'),
(3, 'Administration'),
(4, 'Engineering'),
(5, 'IT'),
(6, 'Marketing'),
(7, 'Sales'),
(8, 'Teaching'),
(9, 'Advertising'),
(10, 'Aerospace'),
(11, 'Banking'),
(12, 'Catering'),
(13, 'Education'),
(14, 'Healthcare'),
(15, 'Education'),
(16, 'Advertising '),
(17, 'Aerospace'),
(18, 'Apprenticeships '),
(19, 'Automotive'),
(20, 'Banking'),
(21, 'Call Centre'),
(22, 'Catering '),
(23, 'Charity'),
(24, 'Construction'),
(25, 'Creative'),
(26, 'Customer Service'),
(27, 'Digital'),
(28, 'Engineering'),
(29, 'Finance'),
(30, 'FMCG'),
(31, 'Graduate'),
(32, 'software developer or php developer'),
(33, 'dot net developer'),
(34, 'HR MANAGAGRE');

-- --------------------------------------------------------

--
-- Table structure for table `profcv`
--

CREATE TABLE `profcv` (
  `prof_id` int(50) NOT NULL,
  `fname` varchar(100) NOT NULL,
  `email` varchar(100) NOT NULL,
  `pass` varchar(100) NOT NULL,
  `number` varchar(100) NOT NULL,
  `location` varchar(100) NOT NULL,
  `qual` varchar(100) NOT NULL,
  `exp` varchar(100) NOT NULL,
  `month` varchar(50) NOT NULL,
  `industry` varchar(100) NOT NULL,
  `job_fun` varchar(100) NOT NULL,
  `skill` varchar(100) NOT NULL,
  `des` varchar(100) NOT NULL,
  `filename` varchar(200) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `profcv`
--

INSERT INTO `profcv` (`prof_id`, `fname`, `email`, `pass`, `number`, `location`, `qual`, `exp`, `month`, `industry`, `job_fun`, `skill`, `des`, `filename`) VALUES
(1, 'avinash', 'thomaschinnu1@gmail.com', 'chinju', '2345678901', 'Bangalore', 'M-Tech', '9', '5', 'Biotechnology/Greentech', 'Accountancy', 'MBA', 'qqqq', 'error-page.html.txt');

-- --------------------------------------------------------

--
-- Table structure for table `profile`
--

CREATE TABLE `profile` (
  `prof_id` int(20) NOT NULL,
  `fname` varchar(100) NOT NULL,
  `lname` varchar(100) NOT NULL,
  `number` varchar(30) NOT NULL,
  `email` varchar(100) NOT NULL,
  `address` varchar(200) NOT NULL,
  `country` varchar(50) NOT NULL,
  `state` varchar(50) NOT NULL,
  `city` varchar(50) NOT NULL,
  `qual` varchar(100) NOT NULL,
  `exp` varchar(50) NOT NULL,
  `skill` varchar(200) NOT NULL,
  `sal` varchar(100) NOT NULL,
  `filename` varchar(300) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `user_login`
--

CREATE TABLE `user_login` (
  `login_id` int(20) NOT NULL,
  `uname` varchar(100) NOT NULL,
  `password` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `user_login`
--

INSERT INTO `user_login` (`login_id`, `uname`, `password`) VALUES
(7, 'Chinju', 'chinju'),
(8, 'Bharath', '123'),
(9, 'Bharath', '123'),
(10, 'Maya', 'maya'),
(11, 'Maya', 'maya'),
(12, 'Sneha', 'sneha'),
(13, 'matheen', '12345'),
(14, 'bharath', '12345'),
(15, 'Arun', 'arun'),
(16, 'abdul', '12345');

-- --------------------------------------------------------

--
-- Table structure for table `user_reg`
--

CREATE TABLE `user_reg` (
  `id` int(20) NOT NULL,
  `uname` varchar(100) NOT NULL,
  `email` varchar(100) NOT NULL,
  `password` varchar(100) NOT NULL,
  `number` varchar(100) NOT NULL,
  `location` varchar(100) NOT NULL,
  `qual` varchar(100) NOT NULL,
  `exp` varchar(100) NOT NULL,
  `month` varchar(100) NOT NULL,
  `industry` varchar(100) NOT NULL,
  `job_fun` varchar(100) NOT NULL,
  `skill` varchar(100) NOT NULL,
  `des` varchar(100) NOT NULL,
  `filename` varchar(200) NOT NULL,
  `img_filename` varchar(100) NOT NULL,
  `register_with` varchar(100) DEFAULT NULL,
  `reg_details` varchar(100) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `user_reg`
--

INSERT INTO `user_reg` (`id`, `uname`, `email`, `password`, `number`, `location`, `qual`, `exp`, `month`, `industry`, `job_fun`, `skill`, `des`, `filename`, `img_filename`, `register_with`, `reg_details`) VALUES
(3, 'Chinju', 'thomaschinnu1@gmail.com', 'chinju', '2345678901', 'Bangalore', 'CFA', '14', '8', 'Computer Hardware', 'Administration', 'PHP', 'qehygwywg', 'Chinchu resume new.pdf', '', 'portal', 'completed'),
(8, 'Sneha', 'sneha@gmail.com', 'sneha', '2345678901', 'Bangalore', 'M-Tech', '9', '4', 'Broadcast Media', 'Accountancy', 'MBA', 'qqqqqqq11', 'htaccess.txt', '2Tulips.jpg', 'portal', 'completed'),
(9, 'matheen', 'matheen@gmail.com', '12345', '9738326611', 'hyderabad', 'MCA', '1', '0', 'Computer Hardware', 'Administration', 'php', 'this is for testing', 'matheen.pdf', 'ak.jpeg', 'portal', 'completed'),
(10, 'bharath', 'bhar@gmail.com', '12345', '9738333266', 'bangalore', 'B-Tech', '0', '0', 'Banking/Mortgage', 'BPO', 'communication', 'this is for testing', 'arundocresume fresher.doc', 'scan0026.jpg', 'portal', 'completed'),
(11, 'Arun', 'arun@gmail.com', 'arun', '9656772110', 'Mysore', 'MBA', '16', '4', 'Building Materials', 'Accountancy', 'MBA', 'qqqqqqq', 'Chinchu resume SEO.docx', 'Hydrangeas.jpg', 'portal', 'completed'),
(18, 'abdul', 'abdul@gmail.com', '12345', '7412589871', 'bangalore', 'M-Tech', '0', '0', 'Accounting', 'Accountancy', 'developer', 'this is for demo this is for demo this is for demo this is for demo this is for demo this is for dem', 'Arun Bangalore.doc', '2scan0026.jpg', 'portal', 'completed'),
(22, 'matheen ulla', 'matheenulla6@gmail.com', '', '9738321465', 'pune', 'PGDCA', '1', '1', ' Accounting', 'Accountancy', 'php', 'osm developer', 'Arun Bangalore.doc', '3IMG_20181215_224300.jpg', 'google account', 'completed'),
(23, 'G.one infotech solutions', 'gonecampus@gmail.com', '', '7845369874', 'hfre', 'MBA', '0', '0', ' Accounting', 'Accountancy', 'sdfdf', 'jgj', 'arundocresume fresher.doc', '4IMG_20181215_224300.jpg', 'google account', 'completed');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `apply`
--
ALTER TABLE `apply`
  ADD PRIMARY KEY (`app_id`);

--
-- Indexes for table `blog`
--
ALTER TABLE `blog`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `candidate_jobapp`
--
ALTER TABLE `candidate_jobapp`
  ADD PRIMARY KEY (`can_jobappid`),
  ADD KEY `candidate_ID` (`candidate_ID`),
  ADD KEY `job_id` (`job_id`),
  ADD KEY `emp_id` (`emp_id`);

--
-- Indexes for table `can_job_status`
--
ALTER TABLE `can_job_status`
  ADD PRIMARY KEY (`statusid`),
  ADD KEY `canid` (`canid`);

--
-- Indexes for table `can_login`
--
ALTER TABLE `can_login`
  ADD PRIMARY KEY (`login_id`);

--
-- Indexes for table `can_reg`
--
ALTER TABLE `can_reg`
  ADD PRIMARY KEY (`can_id`);

--
-- Indexes for table `comp_reg`
--
ALTER TABLE `comp_reg`
  ADD PRIMARY KEY (`com_id`);

--
-- Indexes for table `createcv`
--
ALTER TABLE `createcv`
  ADD PRIMARY KEY (`cv_id`);

--
-- Indexes for table `create_resume`
--
ALTER TABLE `create_resume`
  ADD PRIMARY KEY (`resume_id`);

--
-- Indexes for table `emp_login`
--
ALTER TABLE `emp_login`
  ADD PRIMARY KEY (`login_id`);

--
-- Indexes for table `emp_reg`
--
ALTER TABLE `emp_reg`
  ADD PRIMARY KEY (`emp_id`);

--
-- Indexes for table `freelancer_details`
--
ALTER TABLE `freelancer_details`
  ADD PRIMARY KEY (`FdetailsID`),
  ADD KEY `ID` (`ID`);

--
-- Indexes for table `freelancer_jobapplication`
--
ALTER TABLE `freelancer_jobapplication`
  ADD PRIMARY KEY (`appID`),
  ADD KEY `jobID` (`jobID`),
  ADD KEY `Freelancer_ID` (`Freelancer_ID`),
  ADD KEY `emp_id` (`emp_id`);

--
-- Indexes for table `freelance_register`
--
ALTER TABLE `freelance_register`
  ADD PRIMARY KEY (`ID`);

--
-- Indexes for table `google`
--
ALTER TABLE `google`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `job_city`
--
ALTER TABLE `job_city`
  ADD PRIMARY KEY (`job_city_id`);

--
-- Indexes for table `job_company`
--
ALTER TABLE `job_company`
  ADD PRIMARY KEY (`job_com_id`);

--
-- Indexes for table `job_position`
--
ALTER TABLE `job_position`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `job_reg`
--
ALTER TABLE `job_reg`
  ADD PRIMARY KEY (`job_id`),
  ADD KEY `emp_id` (`emp_id`);

--
-- Indexes for table `job_title`
--
ALTER TABLE `job_title`
  ADD PRIMARY KEY (`job_title_id`);

--
-- Indexes for table `profcv`
--
ALTER TABLE `profcv`
  ADD PRIMARY KEY (`prof_id`);

--
-- Indexes for table `profile`
--
ALTER TABLE `profile`
  ADD PRIMARY KEY (`prof_id`);

--
-- Indexes for table `user_login`
--
ALTER TABLE `user_login`
  ADD PRIMARY KEY (`login_id`);

--
-- Indexes for table `user_reg`
--
ALTER TABLE `user_reg`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `apply`
--
ALTER TABLE `apply`
  MODIFY `app_id` int(20) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `blog`
--
ALTER TABLE `blog`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `candidate_jobapp`
--
ALTER TABLE `candidate_jobapp`
  MODIFY `can_jobappid` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=39;

--
-- AUTO_INCREMENT for table `can_job_status`
--
ALTER TABLE `can_job_status`
  MODIFY `statusid` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT for table `can_login`
--
ALTER TABLE `can_login`
  MODIFY `login_id` int(20) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `can_reg`
--
ALTER TABLE `can_reg`
  MODIFY `can_id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `comp_reg`
--
ALTER TABLE `comp_reg`
  MODIFY `com_id` int(20) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `createcv`
--
ALTER TABLE `createcv`
  MODIFY `cv_id` int(20) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `create_resume`
--
ALTER TABLE `create_resume`
  MODIFY `resume_id` int(20) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `emp_login`
--
ALTER TABLE `emp_login`
  MODIFY `login_id` int(20) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `emp_reg`
--
ALTER TABLE `emp_reg`
  MODIFY `emp_id` int(20) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `freelancer_details`
--
ALTER TABLE `freelancer_details`
  MODIFY `FdetailsID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=21;

--
-- AUTO_INCREMENT for table `freelancer_jobapplication`
--
ALTER TABLE `freelancer_jobapplication`
  MODIFY `appID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=25;

--
-- AUTO_INCREMENT for table `freelance_register`
--
ALTER TABLE `freelance_register`
  MODIFY `ID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=43;

--
-- AUTO_INCREMENT for table `google`
--
ALTER TABLE `google`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `job_city`
--
ALTER TABLE `job_city`
  MODIFY `job_city_id` int(20) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=23;

--
-- AUTO_INCREMENT for table `job_company`
--
ALTER TABLE `job_company`
  MODIFY `job_com_id` int(20) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=26;

--
-- AUTO_INCREMENT for table `job_position`
--
ALTER TABLE `job_position`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `job_reg`
--
ALTER TABLE `job_reg`
  MODIFY `job_id` int(20) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=47;

--
-- AUTO_INCREMENT for table `job_title`
--
ALTER TABLE `job_title`
  MODIFY `job_title_id` int(20) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=35;

--
-- AUTO_INCREMENT for table `profcv`
--
ALTER TABLE `profcv`
  MODIFY `prof_id` int(50) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `profile`
--
ALTER TABLE `profile`
  MODIFY `prof_id` int(20) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `user_login`
--
ALTER TABLE `user_login`
  MODIFY `login_id` int(20) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=17;

--
-- AUTO_INCREMENT for table `user_reg`
--
ALTER TABLE `user_reg`
  MODIFY `id` int(20) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=24;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `candidate_jobapp`
--
ALTER TABLE `candidate_jobapp`
  ADD CONSTRAINT `candidate_jobapp_ibfk_1` FOREIGN KEY (`candidate_ID`) REFERENCES `user_reg` (`id`),
  ADD CONSTRAINT `candidate_jobapp_ibfk_3` FOREIGN KEY (`emp_id`) REFERENCES `emp_reg` (`emp_id`),
  ADD CONSTRAINT `candidate_jobapp_ibfk_4` FOREIGN KEY (`job_id`) REFERENCES `job_reg` (`job_id`) ON DELETE CASCADE;

--
-- Constraints for table `can_job_status`
--
ALTER TABLE `can_job_status`
  ADD CONSTRAINT `can_job_status_ibfk_1` FOREIGN KEY (`canid`) REFERENCES `user_reg` (`id`) ON DELETE CASCADE;

--
-- Constraints for table `freelancer_details`
--
ALTER TABLE `freelancer_details`
  ADD CONSTRAINT `freelancer_details_ibfk_1` FOREIGN KEY (`ID`) REFERENCES `freelance_register` (`ID`);

--
-- Constraints for table `freelancer_jobapplication`
--
ALTER TABLE `freelancer_jobapplication`
  ADD CONSTRAINT `freelancer_jobapplication_ibfk_2` FOREIGN KEY (`Freelancer_ID`) REFERENCES `freelance_register` (`ID`),
  ADD CONSTRAINT `freelancer_jobapplication_ibfk_3` FOREIGN KEY (`emp_id`) REFERENCES `emp_reg` (`emp_id`),
  ADD CONSTRAINT `freelancer_jobapplication_ibfk_4` FOREIGN KEY (`jobID`) REFERENCES `job_reg` (`job_id`) ON DELETE CASCADE;

--
-- Constraints for table `job_reg`
--
ALTER TABLE `job_reg`
  ADD CONSTRAINT `job_reg_ibfk_1` FOREIGN KEY (`emp_id`) REFERENCES `emp_reg` (`emp_id`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
