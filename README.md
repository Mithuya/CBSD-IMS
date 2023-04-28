# CBSD - COMPONENT BASED SOFTWARE DEVELOPMENT

IMS is an Institute Management System that provides a streamlined and efficient approach to managing courses, subjects, and exams within an educational institution. The system consists of three core modules: the course module, subject module, and exam module, as well as a service component or course component using APIs.

Paths for accessing the modules are as follows: http://cbsd-ims.test/exams is the path of the exam module, http://cbsd-ims.test/courses is the path of the course module, and http://cbsd-ims.test/subjects is the path of the subject module.

Functional Requirements
The functional requirements of IMS are focused on the three core modules and the service component:

Course Module: This module provides functionality for creating, modifying, and managing courses offered by the institution. It allows administrators to define course details such as the name, description, prerequisites, duration, fees, and other relevant information. 

Subject Module: This module enables administrators to create and manage subjects within each course. It provides functionality for defining subject details such as the name, description, prerequisites. 

Exam Module: This module provides functionality for scheduling and conducting exams. It allows administrators to define exam details such as the exam name, date, time, duration, and associated course.The module also enables the generation of exam schedules, the assignment of exam invigilators, and the monitoring of exam results.

Service Component/Course Component: This module provides an interface for external systems to interact with IMS. It enables the integration of other systems such as learning management systems, student information systems, and payment gateways. The module also provides functionality for managing course details such as schedules, fees, and enrollment through APIs.

Usage
To use IMS, access the URLs for the course, subject, and exam modules. Within each module, the user can create, modify, and manage courses, subjects, and exams. 
In the dashboard view, the user can see the total number of courses and exams conducted.

Conclusion
IMS is a comprehensive and user-friendly platform for managing the various aspects of an educational institution, from course and subject management to exam scheduling and beyond. The system's functional requirements provide a powerful and flexible tool for administrators to manage and monitor the institution's academic activities.

## Installation

#### How to setup this Project from Git?

clone this repository
```bash
git clone https://github.com/Mithuya/CBSD-IMS.git
```
Install Composer Dependencies

```bash
composer install
```
Install NPM Dependencies or Yarn
```bash
npm install
    or
yarn

```
Create a copy of your .env file
```bash
cp .env.example .env
```
Generate an app encryption key
```bash
php artisan key:generate
```
Migrate the database.
laravel create a DB as you configured in .env file
```bash
php artisan migrate
```
[Optional]: Seed the database
```bash
php artisan db:seed
```
Finaly Serve the Project
```bash
php artisan serve
```

## 🛠 Skills accomplished during this project

**Component based software development**\ 

**service Oriented software development**\

**Read me File Generation**\
    - [Styles and syntax](https://docs.github.com/en/get-started/writing-on-github/getting-started-with-writing-and-formatting-on-github/quickstart-for-writing-on-github)

**Introdution to git**\

**Laravel**\


## Author

- [@Mithuya](https://github.com/Mithuya)
