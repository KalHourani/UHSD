# UHSD
University of Houston Software Design

Description: 
A partner of your company has requested to build a web application that will predict the
rate of the fuel based on the following criteria:
- Client Location
- Competitors rate
- Client rate history
- Gallons requested
- Company profit margin (%)
- Seasonal rate fluctuation (%)

Front end must include following components:
- Login (Allow Clientnt to register if not a client yet)
- Client Registration (Initially only username and Password)
- Client Profile Management (After client registers they should login first to complete the profile). Following fields will be on Profile page / form:
	- Full Name (50 characters, required)
	- Address 1 (100 characters, required)
	- Address 2 (100 characters, optional)
	- City (100 characters, required)
	- State (Drop Down, selection required) DB will store 2 character state code
	- Zipcode (9 characters, at least 5 character code required)
	
- Fuel Quote Form with following fields: (We are not building procing module yet)
	- Gallons Requested (numeric, required)
	- Delivery Address (Non-editable, comes from client profile)
	- Delivery Date (Calender, date picker)
	- Suggested Price (numeric non-editable, price will be calculated by Pricing Module - we are not building pricing module yet)
	- Total Amount Due (numeric non-editable, calculated (gallons * price))
	
- Fuel Quote History
	- Tabular display of all client quotes in the past. All fields from Fuel Quote are displayed.

- You should have validations in place for required fields, field types, and field lengths. 

Back end must include following components/modules:
- Login module
- Client Profile Management module
- Fuel Quote module, includes list of quote history for a client.
- Pricing module. Only create a placeholder. You will implement this in last assignment.

Important deliverables:
- You should have validations in place for required fields, field types, and field lengths. 
- All backend code should be covered by unit tests. Code coverage should be grater than 80%. 
- Research how to run the code coverage reports. Each IDE has plugins to generate reports. Here are few pointers. https://stackify.com/code-coverage-tools/
- All front end should be connected to back end. Form data should be polulated from backend. Backend should receive data from front end, validate, and prepare to persist to DB.
- WE ARE NOT IMPLEMENTING DB yet. Only create the wireframes for it.

Database must include following tables:
- Login
- Client Information
- Fuel Quote
- Competitor Data (provided by TAs)

Important deliverables:
- You should have validations in place for required fields, field types, and field lengths. 
- Backend should retreive data from DB and display it to front end.
- Form data should be polulated from backend. Backend should receive data from front end, validate, and persist to DB.
