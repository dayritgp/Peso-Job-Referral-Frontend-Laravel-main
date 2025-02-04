

![Logo](https://github.com/NOTRE-DAME-OF-DADIANGAS-UNIVERSITY/PESO-JobReferral-FrontEnd-WebApp/blob/jarylle/images/admin/Referral_Logo.png?raw=true)

# Local Government Unit-Gensan's PESO Job Referral System - Job Portal Application
<table>
<tr>
<td>
an online website designed for job postings of employers and agencies under PESO’s verified partner employers. It is an application with two main actors: job seeker and employer where the aforementioned actors interact with each other through a job allocation process where the PESO centrally matches both parties. Similar application:PhilJobNet (PJN).
</td>
</tr>
</table>

## Table of Contents
* Overview
* Built with
* [Site Users](#heading)
  * [Visitor](#sub-heading)
  * [Job Seeker](#sub-heading)
  * [Employer](#sub-heading)
    * [Dashboard](#sub-heading)
  * [PESO Staff/Admin](#sub-heading)
* Note
* Team
  
## About
### System
This system is developed for the Public Employment Service Office (PESO) of LGU - Gensan where it aims to make the Job Referral System of the office accessible online with the main key actors: job seeker and employer. The PESO currently has a running 'Referral System' however, it is solely managed by the PESO admin which slows down the process of referral procedures. Upon the analysis, the following are the identified issues and problems:
* All registration procedures are done manually through pen and paper.
* The PESO - Staff manually match employer and job seeker.
* The employer sent out job vacancy postings through email only.
* Manual tracking of job vacancy slots or availability.
comprises with three distinct type of users: job seekers, employers, and staff. 

## Built with 
This section are the list of tools used in developing the front-end of the website application.

- [HTML](https://www.w3schools.com/html/)
- [CSS](https://www.w3schools.com/css/)
- [JavaScript](https://www.w3schools.com/js/)
- [jQuery](http://www.w3schools.com/jquery/jquery_ref_ajax.asp)
- [Ajax](http://www.w3schools.com/jquery/jquery_ref_ajax.asp)
- [Node.js](http://www.w3schools.com/jquery/jquery_ref_ajax.asp)
- [JSON](http://www.w3schools.com/jquery/jquery_ref_ajax.asp)

## Site
<details><summary><b>Visitor's Page</b></summary>
    A visitor user is a potential end-user of the system that either falls between a job seeker or an employer. The visitor user has no role in the system except browsing jobs posted with minimal privileges of viewing job details. 

The visitor is limited to the following privileges:
* Cannot apply for job vacancy unless the visitor signs up and creates an account as a job seeker.
* Cannot post a job vacancy unless the visitor signs up and creates an account as a employer.
* Cannot search or browse for job seeker's profile.
* Cannot find employer's profile.
</details>

<details><summary><b>Employer's Page</b></summary>

* Home: This serves as the landing page of the employer-side where it shares the same landing page across various users.
* Job Posts: In this page, it comprises all of the published job postings of the employer where it can be viewed in the same way formatted to job seeker's page. The employer can sort and search job postings.
* Find Job Seeker: In this page, employer has the privilege to browse all registered and approved job seeker applicant's profile where employer can search specific fields in the search bar such as name, skills, and etc.
* Dashboard: An administrative quick access to information that provides data visualization significant to employer. The dashboard comprises several tabs that uniquely has its own function.
  The following are the dashboard's tabs:
    * Dashboard - Tab: Shows quick quantitative report of the number of referred applicants, posted job vacancies, jobs posted, and applicants available. This also shows the recent activities of employer's job posting as well as recent successful job referrals. 
    * Applicants - Tab: Consist of two different tabs, approved applicants and pending applicants. 
      * Approved: It shows the list of successful referral applications where employer have approved the job seekers to be referred on the certain job specified.
      * Pending: It shows the list of job seekers who newly sent job referral application to the employer. The employer can view the profile of applicant, its NSRP Form 2, resume, and the specific job details that applicant has applied to. The employer can later on approve or reject the application.
    * Job Posts: This centrally manages the job vacancy postings of the employer.
      * Add Job Post: Employer 
      * Job Post Details
    * Notifications: Provides the employer the information of new relevant activities that informs the user to take action or decision on the certain notification.
    * Statistics: Provides reports and analysis of the trends and reports based on demographic and age category analytics.
* User's Guide: This serves as a user manual where it intend to assist employer on how to use the system. `not yet implemented.`
* About: This page showcases the Job Portal Application information as well sa the PESO - Gensan background.
* Profile:
    * Company Profile: This page is intended for employer's NSRP 2 registration where company background, establishment details, and requirements is being asked. Without the completion of this form, the employer hereby limited of unability to post job vacancy and receive job seeker applications.
    * Manage Account: This is the account settings of the employer where he/she can modify own password.
    * Logout: Ends access with the web application.
</details>

<details><summary><b>Staff/Admin's Page</b></summary>


 
Within the context of administrator pages, typically involves functionalities that allow administrators to manage and oversee all aspects, including both the employer/company and jobseeker sides.
* Home: This section likely serves as the landing page for administrators, providing an overview or summary of important information.
* View: This section provides access to view different entities within the system, such as jobs and companies. It may include sub-sections:
  * Jobs: This allows administrators to view job listings from different employers.
  * Company: This provides access to view company profiles, including full details about the companies registered in the system.
* Dashboard: This section likely offers a comprehensive overview of system statistics and other functionalities relevant to the administrator's role. It includes functionalities where the administrator can manage job seekers and employers.
   * Dashboard: Can view the statistics. This includes the ff: Number of Referrals, Interview, Number of Approved Jobseekers, Number of Approved Employers, Number of Pending Jobseeker, Number of Pending Employers, Recent Referred, and Recent Job Posts.
   * Job Seeker:	The administrator can access two tabs: the "Approved" tab and the "Pending" tab.
      * Approved Tab
      * Pending Tab
    * Employer: The administrator can access two tabs: the "Approved" tab and the "Pending" tab.
       * Approved Tab
       * Pending Tab
    * Referrals: This section displays the referred jobseekers of the PESO Staff to a specific employer. The following are the pieces of information that an administrator can see: Employer ID, Job Title/Position, Company, Jobseeker ID, Date Interviewed, Date Approved, and Status.
    * Notifications: This section provides real-time updates on referral status and facilitates communication between users, serving as a central hub for alerts, reminders, and documentation.
* About: This section may contain information about the system, such as its purpose, features, version details, and contact information for support or inquiries. 


</details>
<details><summary><b>Job Seeker's Page</b></summary>

The platform is designed to assist job seekers in efficiently finding employment opportunities. It features various sections including Home, where users can access job vacancies and statistical reports; Find, which allows users to search for specific job listings or companies; Dashboard, providing data visualization and application management tools; User's Guide, offering assistance in navigating the platform; About, providing an overview of the job portal and supporting organization; Profile, enabling users to input personal information and manage their accounts effectively.

 * Home: This is the landing page for Job Seekers where they can view available job vacancies, as well as a quick summary of the web application's statistical report.
 * Find: This page will help Job Seekers search for job vacancies efficiently. The Find page includes two sub-pages:
   * Find - Job: This page is intended for Job Seekers to view and search the list of available job vacancies, as well as filter and narrow down the search results.
     * See More(View Job): This page allows Job Seekers to view the details of the job vacancy, including the Job Position, Description, Qualifications, Work Location, Company, Salary Range, etc.
   * Find - Company: This page is intended for Job Seekers to search for a specific company and view the job listings of that company. The number of available job vacancies is also displayed under the company.
     * View Company: This page shows the Company's Description, CEO, Industry, Revenue, and most importantly, the Job Listings/Vacancies.
 * Dashboard: This page provides data visualization and application management for Job Seekers, including multiple tabs:
   * Dashboard: This tab allows Job Seekers to view a statistical report of the numbers of Job Matches, Total Vacancies, Pending Applications, etc. Quick access to Recent Applications and a list of Recommended Jobs is also provided.
   * My Applications: This tab allows Job Seekers to view the list of their applications to various job vacancies, where they can view the job details and NSRP Form 1. Job Seekers may also cancel their applications.
   * Notifications: This tab shows notifications for Job Seekers, alerting them regarding information from Companies or the PESO Admin.
   * Recently Viewed: This tab shows the history of job vacancies that Job Seekers have viewed.
 * User's Guide: This page serves as a guide for Job Seekers on how to navigate the web application and explains various functionalities.
 * About: This page provides an overview of the PESO Job Portal, as well as information regarding the background of PESO-Gensan. Support and contact information are also located here for further inquiries.
 * Profile: This page allows Job Seekers to input their own background information, view their profile information, manage their account, and log out of the web application.
   * View Profile: This page contains the personal information of the Job Seeker, such as name, email, contact number, sex, etc.
     * View More: This sub-section is an extension of the profile information where additional information about the Job Seeker is displayed.
     * View NSRP Form: This page is essentially the View Profile page but only displayed in the NSRP Form. Job Seekers may also print this out.
   * NSRP Form 1: This page gathers the relevant information of the Job Seeker that will serve as their background before they can apply to any job vacancy.
   * Manage Account: This page allows Job Seekers to change their account information such as Username, Email, and Password.
   * Log Out: Ends the session of the user and exits the web application.
</details>
<p align="right">(<a href="#lgu-gensans-peso-job-referral-system---job-portal-application">back to top</a>)</p>

## Note
Here is the list of lacking functionalities:
* General
   * Empty "About" Page
   * Empty "User's Guide" Page for jobseeker and employer ---> can only be done once system is finished.
* Job Seeker
   * jobseeker_requirements --> unresponsive design
   * jobseeker_requirements --> next btn
   * jobseeker_requirements --> form validation
* Employer
   * employer_register --> unresponsive design
   * employer_register --> next btn
   * employer_register --> form validation
* Admin
   * Dashboard - Job Seeker Tab
     --> add button for the admin to add on-site jobseeker applicants.

## Team [![Backers on Open Collective](https://opencollective.com/git-point/backers/badge.svg)](#backers)
<!-- [![Jarylle Taquiqui](https://avatars1.githubusercontent.com/u/12688534?v=3&s=144)](https://github.com/iharsh234)  | [![Jameelah A. Malong](https://github.com/iharsh234/WebApp/blob/master/images/quandl.jpg)](https://www.quandl.com/) [![Jameelah A. Malong](https://github.com/iharsh234/WebApp/blob/master/images/quandl.jpg)](https://www.quandl.com/) 
---|---
[Jarylle Taquiqui](https://github.com/iharsh234) |[Jameelah A. Malong](https://www.quandl.com) | [Jameelah A. Malong](https://www.quandl.com) 
## [License](https://github.com/iharsh234/WebApp/blob/master/LICENSE.md)

MIT © [Harsh Vijay ](https://github.com/iharsh234) -->


