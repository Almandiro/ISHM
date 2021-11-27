################################################################################

- [View our project here](https://docs.google.com/presentation/d/1vmJoFr7hfe5LdOqQ1tdVEknzuV6ceN5xujSyDE7klnQ/edit#slide=id.p)
---------------------
PROJECT INFORMATION:
---------------------

	Title: 		Heart Attacks
	Institution: 	Rutgers DS BootCamp
	This File:	README.md

	Team Members:
:one: [Jackelyne Gutierrez](https://github.com/Jackelyneg)
		
:two: [Juliana Puskar](https://github.com/Anikraze)
		
:three: [Emily Montgomery](https://github.com/emilymmont)

:four: [Lovensky Lubin](https://github.com/Lubinl)

:five: [Ali Daneshmand](https://github.com/Almandiro)

-------------------
PROJECT OBJECTIVES:
-------------------

:one: &nbsp; Students will be able to articulate the requirements for Project 1.&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;  :white_check_mark: <br/> 
:two:	Students will be able to draw and interpret diagrams of Git 					
	    branching workflows.&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;  :white_check_mark: <br/>
:three: Students will be able to create new branches with Git.&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;  :white_check_mark: <br/>
:four:  Students will be able to push local branches to GitHub.&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;  :white_check_mark: <br/>
:five:  Students will be able to pull a branch from GitHub.&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;  :white_check_mark: <br/>
:six:  Students will be able to merge branches with Git.&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;  :white_check_mark: <br/>
:seven:  Students will be able to open, review, and merge PRs with GitHub.&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;  :white_check_mark: <br/>
:eight:  Students will resolve merge conflicts in their working copy.&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;  :white_check_mark: <br/>
:nine:  Students will push branches to GitHub.&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;  :white_check_mark: <br/>
:keycap_ten:  Students will be able to open a PR against a given branch.&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;  :white_check_mark: <br/>
:keycap_eleven: Students will be able to use Git's stash feature to save "dirty" work &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;  :white_check_mark: <br/>

--------------------
PROJECT DESCRIPTION:
--------------------

In today's society, heart health is a major concern for many Americans.  This 
concern has lead to the desire for devices that allow one to self-monitor one's
health, specifically, one's own heart health. 

In this project, we'll be evaluating data on Heart Arrythmia's, specifically A-Fib
to understand the contributing factors to the arrhythmia (i.e. age, weight, etc.)

-----------------------
Hypothesis & Questions:
-----------------------

	Null Hypothesis: 	
	-Everyone is equally at risk of suffering from A-Fib, regardless of age

	Alternative Hypothesis:  	
	-A-Fib is more likely in ages greater than 60.

	Questions:
		1. What age group has the highest frequency of heart attacks?
		2. Which gender has the highest frequency of heart attacks?
		3. Does weight affect the likelihood of having a heart attack?
		4. How do different aspects of demographics affect A-Fib?
		5. What frequency of Men vs Female suffered Atrial Fibrillation?
----------------
ATTRIBUTES:
----------------
	1. Age (0-83)
	2.Gender (Male and Female)
	3.Weight (6-176 kg)
	4.Heart Rate
	5.Diagnosis 
	6.Body Mass Index (BMI)
	7.Weight status (based on BMI)
	8.Age bins (based on decade)

----------------
ANALYTICAL WORK:
----------------

	Alternative Hypothesis
		The alternative hypothesis (H1) was rejected. Based on our results the Null hypothesis (H0 ) was true.  
		The confidence interval was 0.95 and the degree of freedom was 1. α value was 0.05.
		Therefore, as a result, the "NULL Hypothesis" is supported by our data.

![Alternative Hypothesis Supporting Graph](https://github.com/Almandiro/Rutgers_DS_Project_1/blob/main/images/alt_hypothesis_graph.png?raw=true)




Here's some things we did learn based on the Additional Questions we posed.
	
	Q: What age group has the highest frequency of heart attacks ?
	A:The data implies that the most freqent age groups where heart arrhythmia is most likely to occur is between the ages of 40-50. 

![Alternative Hypothesis Supporting Graph](https://github.com/Almandiro/Rutgers_DS_Project_1/blob/main/images/age_bar.png?raw=true)



	
	
	Q:Does Weight Affect the Likelihood of Having a Heart Attack?
	A:The data implies that the most frequent weight groups where heart arrhythmia is most likely to occur is from 50-74 kg

![Alternative Hypothesis Supporting Graph](https://github.com/Almandiro/Rutgers_DS_Project_1/blob/main/images/weight_bar.png?raw=true)



	
	
	
	Q:Which Gender has the Highest frequency of Heart Attacks?
	A: Based on the data there is a more frequent occurence of heart arrhythmia in females 
	   Females make up 65% of the data while males make up almost 35%.
![Alternative Hypothesis Supporting Graph](https://github.com/Almandiro/Rutgers_DS_Project_1/blob/main/ll_images/bar%20chart%20sex%20and%20new.png)
![Alternative Hypothesis Supporting Graph](https://github.com/Almandiro/Rutgers_DS_Project_1/blob/main/ll_images/pie%20chart%20gender.png)


-----------
REFERENCES:
-----------

Data Source:  
[KAGGLE: https://www.kaggle.com/bulentesen/cardiac-arrhythmia-database](https://github.com/Almandiro/Rutgers_DS_Project_1/blob/main/ll_images/bar%20chart%20sex%20and%20new.png) 

Graphics Source(s):
[Heart Valve Surgery: https://www.heart-valve-surgery.com/human-heart-diagram.php](https://www.heart-valve-surgery.com/human-heart-diagram.php) 

----------------------
APPLICABLE TECHNOLOGY:
----------------------
	1.  Python PANDA
	2.  Jupiter Notebooks
	3.  MatPloyLib
	
----------------------
Python Code:
----------------------
- [Code to clean the Data and put data into bins](https://github.com/Almandiro/Rutgers_DS_Project_1/blob/main/clean_heart_data_jg.ipynb)



################################################################################

