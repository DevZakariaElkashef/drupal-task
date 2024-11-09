 # Events Management Module Drupal

 ## Overview

 This is a custom **Events Management** module for **Drupal 10**, designed to help back-end users manage events. This module provides functionalities for creating, viewing, and categorizing events. The module includes:

 - Event attributes (title, description, image, start/end time, and category).
 - A back-end form to create and manage events.
 - A front-end display for listing events and viewing event details.
 - A configuration page to customize event listings (e.g., show or hide past events).

 While the module isn't fully complete (some features such as Docker setup and a button for show/hide the past events are missing), it provides the core functionality of event management as described in the task.

 ## Installation

 Follow these steps to set up the project on your local machine:

 ### 1. Clone the Repository

 First, clone the repository to your local machine:

 ```bash
 git clone https://github.com/your-username/events-management.git
 cd events-management
 ```

 ### 2. Install Dependencies

 Next, run `composer` to install the necessary dependencies for the Drupal project:

 ```bash
 composer install
 ```

 This will install all required libraries and packages, including Drupal core.

 ### 3. Open the Drupal Project

 Once the dependencies are installed, open the Drupal project in your browser. This can typically be done by navigating to the local development server:

 ```bash
 http://localhost:8000
 ```

 Ensure that your local Drupal installation is set up properly.

 ### 4. Enable the Custom Events Management Module

 To enable the Events Management module:

 1. Log in to the Drupal admin panel as an administrator.
 2. Navigate to **Manage > Extend**.
 3. Locate the **Events Management** module under the **Custom** category.
 4. Check the box next to **Events Management**.
 5. Scroll to the bottom and click **Install** to enable the module.

 ### 5. Configure the Module

 To configure the Events Management module:

 1. Navigate to **Configuration > Events Management**.
 2. Set up the following options:
    - **Show or hide past events**: Toggle this option to control whether past events are shown in the listing.
    - **Number of events to list**: Set the number of events to display on the event listing page.

 ### 6. Add Events

 To add new events:

 1. Navigate to **Create Event** under the **Events Management** section:
    - URL: `/admin/events-management/events/create`
 2. Fill out the form with the event's details (title, image, description, start/end times, and category).
 3. Submit the form to create the event.

 ### 7. View Events

 To view the events on the front-end:

 1. Navigate to the **Events Page** at the top navigation bar on the website.
 2. The page will list all the upcoming and active events.

 ### Database File

 If you'd like to try it with custom data, a database file is included in the repo. Please import the `events_management.sql` file into your MySQL database to populate it with sample data.

 ## Conclusion

 While some features (like Docker integration and the button functionality) are still pending, the core features of event management are working, and the system should be functional.

 Thank you for your time, and sorry for not completing everything, but I have learned a lot through this task. I appreciate your understanding.
