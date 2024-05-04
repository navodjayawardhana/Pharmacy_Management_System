# Pharmacy Management System

## Introduction
This Pharmacy Management System is designed to streamline operations and reduce workload for the pharmacy staff. It includes features for maintaining inventory of medicines and customer records efficiently.

## Features
- **Maintain Inventory:** Add, remove, and edit medicines in the inventory.
- **Maintain Customer Records:** Add, update, and delete customer details.

## User Roles and Privileges
- **Owner:**
  - Add items to inventory
  - Add customers
- **Manager:**
  - Update and delete customer details
- **Cashier:**
  - Remove items from inventory
  - Edit items in inventory

## User Logging Mechanism
To manage the above-mentioned policies, the system employs a user logging mechanism that records every action taken by users. This logging system helps in monitoring and auditing user activities, ensuring compliance with the defined roles and privileges.

## Technologies Used
- Programming Language: [Specify]
- Database Management System: [Specify]
- Web Framework: [Specify, if applicable]
- Additional Libraries/Tools: [Specify, if applicable]

## Installation
- **Frist One:**
  - CMD run- php artisan migrate
- **Second One:**
  - CMD run- php artisan db:seed --class=InitialUserSeeder
 


