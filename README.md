==================================================================
Mission: Version Control

Tests: GitHub, API, PHP, WordPress and problem solving skills

Difficulty: 4/5

Est. Time: 4 hours

==================================================================

Briefing:
A client has requested a new online documentation site for their recently released software product.  The software is updated on a regular basis, as is their documentation.  As such, version control and update notifications are their top priority.

The client increments the version number of their documentation each time a commit is made to a GitHub repository.  They also want to preserve the ability to keep documentation pages that relate to older versions of their software.

Objective:
The client would like to see a "proof of concept" WordPress installation the accomplishes the following:
Displays the text "Version 0.1" on the footer of every page, with the version number automatically updating the page with each *push* to the repository and increasing by 0.1 for each *commit* that is made to the repository
Allow a WordPress admin to select any valid version number to be associated with a WordPress page.  If the version number selected is less than the current version number, display the message in bold, red text "This documentation is for Version X.X", instead of the global version number

Requirements:

  - Create a blank, public GitHub repo when you receive the mission and add "uptrending" and "mattkeys" as collaborators
  - Create a feature branch for this mission and add these requirements as your first commit
  - Send a pull request when your work is complete

Notes:

  - Site at http://lunchrace.com/dev/
  - Admin at http://lunchrace.com/dev/wp-admin/
  - Admin User is admin / iamaprettypony
