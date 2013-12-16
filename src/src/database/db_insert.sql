-------------INSERTS
--PERMISSIONS
insert into permissions(permission) values ('INSERT');       

--PERMISSIONS_USERS

--==================================================================
--================= CORE CURRICULUM  ====================================
--==================================================================

--DOMAINS
insert into domains (domain) values ('Counting and Cardinality');   
insert into domains (domain) values ('Opererations & Algebraic Thinking');   
insert into domains (domain) values ('Number & Opererations in Base Ten');   
insert into domains (domain) values ('Measurement & DataNumber');   
insert into domains (domain) values ('Geometry');   

--GRADES
insert into grades (grade) values ('K'); 
insert into grades (grade) values ('1'); 
insert into grades (grade) values ('2'); 
insert into grades (grade) values ('3'); 
insert into grades (grade) values ('4'); 
insert into grades (grade) values ('5'); 
insert into grades (grade) values ('6'); 
insert into grades (grade) values ('7'); 
insert into grades (grade) values ('8'); 
insert into grades (grade) values ('9'); 
insert into grades (grade) values ('10'); 
insert into grades (grade) values ('11'); 
insert into grades (grade) values ('12'); 

--SUBJECTS
insert into subjects (subject) values ('Mathematics');
insert into subjects (subject) values ('English Language Arts');

--CLUSTERS
insert into clusters (cluster) values ('Know number names and the count sequence.'); 
insert into clusters (cluster) values ('Count to tell the number of objects.'); 
insert into clusters (cluster) values ('Compare Numbers.'); 
insert into clusters (cluster) values ('Understand addition as putting together and adding to, and understand subtraction as taking apart and taking from.');
insert into clusters (cluster) values ('Work with numbers 11-19 to gain foundations for place value');
insert into clusters (cluster) values ('Describe and compare measurable attributes');
insert into clusters (cluster) values ('Classify objects and count the number of objects in each category.');
insert into clusters (cluster) values ('Identify and describe shapes (squares, circles, triangles, rectangles, hexagons, cubes, cones, cylinders, and spheres).'); 
insert into clusters (cluster) values ('Analyze, compare, create, and compose shapes.');

--LEARING_STANDARDS
--REATE TABLE LearningStandards (
 --       RefID text NOT NULL UNIQUE,
  --      progression NUMERIC(9,3) NOT NULL, -- for us to determine order
   --     levels integer NOT NULL -- for us to determine number of levels till next LearningStandard

insert into LearningStandards (RefID,progression,levels) values ('C712BAA86FEF4BFAB703AD2EB402B2DD',1,11);


--STANDARDS
insert into standards (standard,description) values ('K.CC.A.1','Count to 100 by ones and by tens.');  
insert into standards (standard,description) values ('K.CC.A.2','Count forward beginning from a given number within the known sequence (instead of having to begin at 1).'); 
insert into standards (standard,description) values ('K.CC.A.3','Write numbers from 0 to 20. Represent a number of objects with a written numeral 0-20 (with 0 representing a count of no objects.'); --id=3 
insert into standards (standard,description) values ('K.CC.B.4A','When counting objects, say the number names in the standard order, pairing each object with one and only one number name and each number name with one and only one object.'); 
insert into standards (standard,description) values ('K.CC.B.4B','Understand that the last number name said tells the number of objects counted. The number of objects is the same regardless of their arrangement or the order in which they were counted.'); 
insert into standards (standard,description) values ('K.CC.B.4C','Understand that each successive number name refers to a quantity that is one larger.'); 
insert into standards (standard,description) values ('K.CC.B.5','Count to answer “how many?” questions about as many as 20 things arranged in a line, a rectangular array, or a circle, or as many as 10 things in a scattered configuration; given a number from 1–20, count out that many objects.'); 
insert into standards (standard,description) values ('K.CC.C.6','Identify whether the number of objects in one group is greater than, less than, or equal to the number of objects in another group, e.g., by using matching and counting strategies. Includes groups with up to ten objects.');
insert into standards (standard,description) values ('K.CC.C.7','Compare two numbers between 1 and 10 presented as written numerals.');
insert into standards (standard,description) values ('K.OA.A.1','Represent addition and subtraction with objects, fingers, mental images, drawings1, sounds (e.g., claps), acting out situations, verbal explanations, expressions, or equations.');
insert into standards (standard,description) values ('K.OA.A.2','Solve addition and subtraction word problems, and add and subtract within 10, e.g., by using objects or drawings to represent the problem.');
insert into standards (standard,description) values ('K.OA.A.3','Decompose numbers less than or equal to 10 into pairs in more than one way, e.g., by using objects or drawings, and record each  decomposition by a drawing or equation (e.g., 5 = 2 + 3 and 5 = 4 + 1.');
insert into standards (standard,description) values ('K.OA.A.4','For any number from 1 to 9, find the number that makes 10 when added to the given number, e.g., by using objects or drawings, and record the answer with a drawing or equation.');
insert into standards (standard,description) values ('K.OA.A.5','Fluently add and subtract within 5.');
insert into standards (standard,description) values ('K.NBT.A.1','Compose and decompose numbers from 11 to 19 into ten ones and some further ones. Understand that numbers 11 to 19 are made up of 1 ten and x amount of ones.');
insert into standards (standard,description) values ('K.MD.A.1','Describe measurable attributes of objects, such as length or weight. Describe several measurable attributes of a single object.');
insert into standards (standard,description) values ('K.MD.A.2','Directly compare two objects with a measurable attribute in common...');
insert into standards (standard,description) values ('K.MD.B.3','Classify objects into given categories; count the numbers of objects in each category and sort the categories by count.');
insert into standards (standard,description) values ('K.G.A.1','Describe objects in the environment using names of shapes...');
insert into standards (standard,description) values ('K.G.A.2','Correctly name shapes regardless of their orientations or overall size.');
insert into standards (standard,description) values ('K.G.A.3','Identify shapes as two-dimensional....');
insert into standards (standard,description) values ('K.G.B.4','Analyze and compare two- and three-dimensional shapes...');
insert into standards (standard,description) values ('K.G.B.5','Model shapes in the world by building shapes from components...');
insert into standards (standard,description) values ('K.G.B.6','Compose simple shapes to form..');

--insert into standards (standard,description) values ('','');

insert into standards (standard,description) values ('1.OA.A.1',' Use addition and subtraction within 20 to solve word problems involving situations of adding to, taking from, putting together, taking apart, and comparing, with unknowns in all positions, e.g., by using objects, drawings, and equations with a symbol for the unknown number to represent the problem.');
insert into standards (standard,description) values ('1.O.A.2','Solve word problems that call for addition of three whole numbers whose sum is less than or equal to 20, e.g., by using objects, drawings, and equations with a symbol for the unknown number to represent the problem.');

insert into standards (standard,description) values ('1.OA.B.3','Apply properties of operations as strategies to add and subtract.2 Examples: If 8 + 3 = 11 is known, then 3 + 8 = 11 is also known. (Commutative property of addition.) To add 2 + 6 + 4, the second two numbers can be added to make a ten, so 2 + 6 + 4 = 2 + 10 = 12. (Associative property of addition.)');

insert into standards (standard,description) values ('1.OA.B.4','Understand subtraction as an unknown-addend problem. For example, subtract 10 – 8 by finding the number that makes 10 when added to 8.');

insert into standards (standard,description) values ('1.OA.C.5','Relate counting to addition and subtraction (e.g., by counting on 2 to add 2).');

insert into standards (standard,description) values ('1.OA.C.6','Add and subtract within 20, demonstrating fluency for addition and subtraction within 10. Use strategies such as counting on; making ten (e.g., 8 + 6 = 8 + 2 + 4 = 10 + 4 = 14); decomposing a number leading to a ten (e.g., 13 – 4 = 13 – 3 – 1 = 10 – 1 = 9); using the relationship between addition and subtraction (e.g., knowing that 8 + 4 = 12, one knows 12 – 8 = 4); and creating equivalent but easier or known sums (e.g., adding 6 + 7 by creating the known equivalent 6 + 6 + 1 = 12 + 1 = 13).');

insert into standards (standard,description) values ('1.OA.D.7','Understand the meaning of the equal sign, and determine if equations involving addition and subtraction are true or false. For example, which of the following equations are true and which are false? 6 = 6, 7 = 8 – 1, 5 + 2 = 2 + 5, 4 + 1 = 5 + 2.');

insert into standards (standard,description) values ('1.OA.D.8','Determine the unknown whole number in an addition or subtraction equation relating three whole numbers. For example, determine the unknown number that makes the equation true in each of the equations 8 + ? = 11, 5 = _ – 3, 6 + 6 = _.');


insert into standards (standard,description) values ('1.NBT.A.1','Count to 120, starting at any number less than 120. In this range, read and write numerals and represent a number of objects with a written numeral.');

insert into standards (standard,description) values ('1.NBT.B.2','Understand that the two digits of a two-digit number represent amounts of tens and ones. Understand the following as special cases:');

insert into standards (standard,description) values ('1.NBT.B.2b','10 can be thought of as a bundle of ten ones — called a “ten.”');

insert into standards (standard,description) values ('1.NBT.B.2c','The numbers 10, 20, 30, 40, 50, 60, 70, 80, 90 refer to one, two, three, four, five, six, seven, eight, or nine tens (and 0 ones).');

insert into standards (standard,description) values ('1.NBT.B.3','iCompare two two-digit numbers based on meanings of the tens and ones digits, recording the results of comparisons with the symbols >, =, and <.');

insert into standards (standard,description) values ('1.NBT.C.4','Add within 100, including adding a two-digit number and a one-digit number, and adding a two-digit number and a multiple of 10, using concrete models or drawings and strategies based on place value, properties of operations, and/or the relationship between addition and subtraction; relate the strategy to a written method and explain the reasoning used. Understand that in adding two-digit numbers, one adds tens and tens, ones and ones; and sometimes it is necessary to compose a ten.');

insert into standards (standard,description) values ('1.NBT.C.5','Given a two-digit number, mentally find 10 more or 10 less than the number, without having to count; explain the reasoning used.');

insert into standards (standard,description) values ('1.NBT.C.6','Subtract multiples of 10 in the range 10-90 from multiples of 10 in the range 10-90 (positive or zero differences), using concrete models or drawings and strategies based on place value, properties of operations, and/or the relationship between addition and subtraction; relate the strategy to a written method and explain the reasoning used.');

insert into standards (standard,description) values ('1.MD.A.1','Order three objects by length; compare the lengths of two objects indirectly by using a third object.');

insert into standards (standard,description) values ('1.MD.A.2',' Express the length of an object as a whole number of length units, by laying multiple copies of a shorter object (the length unit) end to end; understand that the length measurement of an object is the number of same-size length units that span it with no gaps or overlaps. Limit to contexts where the object being measured is spanned by a whole number of length units with no gaps or overlaps.');

insert into standards (standard,description) values ('1.MD.C.4','Organize, represent, and interpret data with up to three categories; ask and answer questions about the total number of data points, how many in each category, and how many more or less are in one category than in another.');

insert into standards (standard,description) values ('1.G.A.1','Distinguish between defining attributes (e.g., triangles are closed and three-sided) versus non-defining attributes (e.g., color, orientation, overall size); build and draw shapes to possess defining attributes.');

insert into standards (standard,description) values ('1.G.A.2','Compose two-dimensional shapes (rectangles, squares, trapezoids, triangles, half-circles, and quarter-circles) or three-dimensional shapes (cubes, right rectangular prisms, right circular cones, and right circular cylinders) to create a composite shape, and compose new shapes from the composite shape.');

insert into standards (standard,description) values ('1.G.A.3','Partition circles and rectangles into two and four equal shares, describe the shares using the words halves, fourths, and quarters, and use the phrases half of, fourth of, and quarter of. Describe the whole as two of, or four of the shares. Understand for these examples that decomposing into more equal shares creates smaller shares.');

insert into standards (standard,description) values ('2.OA.A.1','Use addition and subtraction within 100 to solve one- and two-step word problems involving situations of adding to, taking from, putting together, taking apart, and comparing, with unknowns in all positions, e.g., by using drawings and equations with a symbol for the unknown number to represent the problem.');

insert into standards (standard,description) values ('2.OA.B.2','Fluently add and subtract within 20 using mental strategies.2 By end of Grade 2, know from memory all sums of two one-digit numbers.');

insert into standards (standard,description) values ('2.OA.C.3','Determine whether a group of objects (up to 20) has an odd or even number of members, e.g., by pairing objects or counting them by 2s; write an equation to express an even number as a sum of two equal addends.');

insert into standards (standard,description) values ('2.OA.C.4','Use addition to find the total number of objects arranged in rectangular arrays with up to 5 rows and up to 5 columns; write an equation to express the total as a sum of equal addends.');

insert into standards (standard,description) values ('2.NBT.A.1','Understand that the three digits of a three-digit number represent amounts of hundreds, tens, and ones; e.g., 706 equals 7 hundreds, 0 tens, and 6 ones. Understand the following as special cases:');

insert into standards (standard,description) values ('2.NBT.A.1a','100 can be thought of as a bundle of ten tens — called a “hundred.”');

insert into standards (standard,description) values ('2.NBT.A.1b','The numbers 100, 200, 300, 400, 500, 600, 700, 800, 900 refer to one, two, three, four, five, six, seven, eight, or nine hundreds (and 0 tens and 0 ones).');



insert into standards (standard,description) values ('2.NBT.A.2','Count within 1000; skip-count by 5s, 10s, and 100s.');

insert into standards (standard,description) values ('2.NBT.A.3','Read and write numbers to 1000 using base-ten numerals, number names, and expanded form.');

insert into standards (standard,description) values ('2.NBT.A.4','Compare two three-digit numbers based on meanings of the hundreds, tens, and ones digits, using >, =, and < symbols to record the results of comparisons.');

insert into standards (standard,description) values ('2.NBT.B.5','Fluently add and subtract within 100 using strategies based on place value, properties of operations, and/or the relationship between addition and subtraction.
');


insert into standards (standard,description) values ('2.NBT.B.6','Add up to four two-digit numbers using strategies based on place value and properties of operations.');

insert into standards (standard,description) values ('2.NBT.B.7','Add and subtract within 1000, using concrete models or drawings and strategies based on place value, properties of operations, and/or the relationship between addition and subtraction; relate the strategy to a written method. Understand that in adding or subtracting three-digit numbers, one adds or subtracts hundreds and hundreds, tens and tens, ones and ones; and sometimes it is necessary to compose or decompose tens or hundreds.');

insert into standards (standard,description) values ('2.NBT.B.8','Mentally add 10 or 100 to a given number 100–900, and mentally subtract 10 or 100 from a given number 100–900.');

insert into standards (standard,description) values ('2.NBT.B.9','Explain why addition and subtraction strategies work, using place value and the properties of operations.');

insert into standards (standard,description) values ('2.MD.A.1','Measure the length of an object by selecting and using appropriate tools such as rulers, yardsticks, meter sticks, and measuring tapes.');

insert into standards (standard,description) values ('2.MD.A.2',' Measure the length of an object twice, using length units of different lengths for the two measurements; describe how the two measurements relate to the size of the unit chosen.');

insert into standards (standard,description) values ('2.MD.A.3','Estimate lengths using units of inches, feet, centimeters, and meters.');

insert into standards (standard,description) values ('2.MD.A.4','Measure to determine how much longer one object is than another, expressing the length difference in terms of a standard length unit.');

insert into standards (standard,description) values ('2.MD.B.5','Use addition and subtraction within 100 to solve word problems involving lengths that are given in the same units, e.g., by using drawings (such as drawings of rulers) and equations with a symbol for the unknown number to represent the problem.');

insert into standards (standard,description) values ('2.MD.B.6','Represent whole numbers as lengths from 0 on a number line diagram with equally spaced points corresponding to the numbers 0, 1, 2, ..., and represent whole-number sums and differences within 100 on a number line diagram.');

insert into standards (standard,description) values ('2.MD.C.7','Tell and write time from analog and digital clocks to the nearest five minutes, using a.m. and p.m.');

insert into standards (standard,description) values ('2.MD.C.8','Solve word problems involving dollar bills, quarters, dimes, nickels, and pennies, using $ and ¢ symbols appropriately. Example: If you have 2 dimes and 3 pennies, how many cents do you have?');

insert into standards (standard,description) values ('2.MD.C.9','Generate measurement data by measuring lengths of several objects to the nearest whole unit, or by making repeated measurements of the same object. Show the measurements by making a line plot, where the horizontal scale is marked off in whole-number units.');

insert into standards (standard,description) values ('2.MD.C.10','Draw a picture graph and a bar graph (with single-unit scale) to represent a data set with up to four categories. Solve simple put-together, take-apart, and compare problems1 using information presented in a bar graph.');

insert into standards (standard,description) values ('2.MD.G.A.1','Recognize and draw shapes having specified attributes, such as a given number of angles or a given number of equal faces.1 Identify triangles, quadrilaterals, pentagons, hexagons, and cubes.');

insert into standards (standard,description) values ('2.G.A.2','Partition a rectangle into rows and columns of same-size squares and count to find the total number of them.');

insert into standards (standard,description) values ('2.G.A.3','Partition circles and rectangles into two, three, or four equal shares, describe the shares using the words halves, thirds, half of, a third of, etc., and describe the whole as two halves, three thirds, four fourths. Recognize that equal shares of identical wholes need not have the same shape.');

insert into standards (standard,description) values ('3.OA.A.1','Interpret products of whole numbers, e.g., interpret 5 × 7 as the total number of objects in 5 groups of 7 objects each. For example, describe a context in which a total number of objects can be expressed as 5 × 7.');

insert into standards (standard,description) values ('3.OA.A.2','Interpret whole-number quotients of whole numbers, e.g., interpret 56 ÷ 8 as the number of objects in each share when 56 objects are partitioned equally into 8 shares, or as a number of shares when 56 objects are partitioned into equal shares of 8 objects each. For example, describe a context in which a number of  shares or a number of groups can be expressed as 56 ÷ 8.');

insert into standards (standard,description) values ('3.OA.A.3','Use multiplication and division within 100 to solve word problems in situations involving equal groups, arrays, and measurement quantities, e.g., by using drawings and equations with a symbol for the unknown number to represent the problem.');

insert into standards (standard,description) values ('3.OA.A.4','Determine the unknown whole number in a multiplication or division equation relating three whole numbers. For example, determine the unknown number that makes the equation true in each of the equations 8 × ? = 48, 5 = _ ÷ 3, 6 × 6 = ?');

insert into standards (standard,description) values ('3.OA.B.5','Apply properties of operations as strategies to multiply and divide.2 Examples: If 6 × 4 = 24 is known, then 4 × 6 = 24 is also known. (Commutative property of multiplication.) 3 × 5 × 2 can be found by 3 × 5 = 15, then 15 × 2 = 30, or by 5 × 2 = 10, then 3 × 10 = 30. (Associative property of multiplication.) Knowing that 8 × 5 = 40 and 8 × 2 = 16, one can find 8 × 7 as 8 × (5 + 2) = (8 × 5) + (8 × 2) = 40 + 16 = 56. (Distributive property.)');

insert into standards (standard,description) values ('3.OA.B.6','Understand division as an unknown-factor problem. For example, find 32 ÷ 8 by finding the number that makes 32 when multiplied by 8.');

insert into standards (standard,description) values ('3.OA.C.7','Fluently multiply and divide within 100, using strategies such as the relationship between multiplication and division (e.g., knowing that 8 × 5 = 40, one knows 40 ÷ 5 = 8) or properties of operations. By the end of Grade 3, know from memory all products of two one-digit numbers.');

insert into standards (standard,description) values ('3.OA.D.8','Solve two-step word problems using the four operations. Represent these problems using equations with a letter standing for the unknown quantity. Assess the reasonableness of answers using mental computation and estimation strategies including rounding.');

insert into standards (standard,description) values ('3.OA.D.9','Identify arithmetic patterns (including patterns in the addition table or multiplication table), and explain them using properties of operations. For example, observe that 4 times a number is always even, and explain why 4 times a number can be decomposed into two equal addends.');

insert into standards (standard,description) values ('3.NBT.A.1','Use place value understanding to round whole numbers to the nearest 10 or 100.');

insert into standards (standard,description) values ('3.NBT.A.2','Fluently add and subtract within 1000 using strategies and algorithms based on place value, properties of operations, and/or the relationship between addition and subtraction.');

insert into standards (standard,description) values ('3.NBT.A.3','Multiply one-digit whole numbers by multiples of 10 in the range 10–90 (e.g., 9 × 80, 5 × 60) using strategies based on place value and properties of operations.');

insert into standards (standard,description) values ('3.NF.A.1','Understand a fraction 1/b as the quantity formed by 1 part when a whole is partitioned into b equal parts; understand a fraction a/b as the quantity formed by a parts of size 1/b.');

insert into standards (standard,description) values ('3.NF.A.2','Understand a fraction as a number on the number line; represent fractions on a number line diagram.');

--insert into standards (standard,description) values ('3.NF.A.2a','Represent a fraction 1/b on a number line diagram by defining the interval from 0 to 1 as the whole and partitioning it into b equal parts. Recognize that each part has size 1/b and that the endpoint of the part based at 0 locates the number 1/b on the number line.');

insert into standards (standard,description) values ('3.NF.A.2b','Represent a fraction a/b on a number line diagram by marking off a lengths 1/b from 0. Recognize that the resulting interval has size a/b and that its endpoint locates the number a/b on the number line.');

insert into standards (standard,description) values ('3.NF.A.3','Explain equivalence of fractions in special cases, and compare fractions by reasoning about their size.');

insert into standards (standard,description) values ('3.NF.A.3a','Understand two fractions as equivalent (equal) if they are the same size, or the same point on a number line.');

insert into standards (standard,description) values ('3.NF.A.3b','Recognize and generate simple equivalent fractions, e.g., 1/2 = 2/4, 4/6 = 2/3. Explain why the fractions are equivalent, e.g., by using a visual fraction model.');

insert into standards (standard,description) values ('3.NF.A.3c','Express whole numbers as fractions, and recognize fractions that are equivalent to whole numbers. Examples: Express 3 in the form 3 = 3/1; recognize that 6/1 = 6; locate 4/4 and 1 at the same point of a number line diagram.');

insert into standards (standard,description) values ('3.NF.A.3d','Compare two fractions with the same numerator or the same denominator by reasoning about their size. Recognize that comparisons are valid only when the two fractions refer to the same whole. Record the results of comparisons with the symbols >, =, or <, and justify the conclusions, e.g., by using a visual fraction model.');

insert into standards (standard,description) values ('3.MD.A.1','Tell and write time to the nearest minute and measure time intervals in minutes. Solve word problems involving addition and subtraction of time intervals in minutes, e.g., by representing the problem on a number line diagram.');

insert into standards (standard,description) values ('3.MD.A.2','Measure and estimate liquid volumes and masses of objects using standard units of grams (g), kilograms (kg), and liters (l).1 Add, subtract, multiply, or divide to solve one-step word problems involving masses or volumes that are given in the same units, e.g., by using drawings (such as a beaker with a measurement scale) to represent the problem.');

insert into standards (standard,description) values ('3.MD.B.3','Draw a scaled picture graph and a scaled bar graph to represent a data set with several categories. Solve one- and two-step “how many more” and “how many less” problems using information presented in scaled bar graphs. For example, draw a bar graph in which each square in the bar graph might represent 5 pets.');

insert into standards (standard,description) values ('3.MD.B.4','Generate measurement data by measuring lengths using rulers marked with halves and fourths of an inch. Show the data by making a line plot, where the horizontal scale is marked off in appropriate units— whole numbers, halves, or quarters.');

insert into standards (standard,description) values ('3.MD.C.5','Recognize area as an attribute of plane figures and understand concepts of area measurement.');

insert into standards (standard,description) values ('3.MD.C.5a','A square with side length 1 unit, called “a unit square,” is said to have “one square unit” of area, and can be used to measure area.');

insert into standards (standard,description) values ('3.MD.C.5b','A plane figure which can be covered without gaps or overlaps by n unit squares is said to have an area of n square units.');

insert into standards (standard,description) values ('3.MD.C.6','Measure areas by counting unit squares (square cm, square m, square in, square ft, and improvised units).');

insert into standards (standard,description) values ('3.MD.C.7','Relate area to the operations of multiplication and addition.');

insert into standards (standard,description) values ('3.MD.C.7a','Find the area of a rectangle with whole-number side lengths by tiling it, and show that the area is the same as would be found by multiplying the side lengths.');

insert into standards (standard,description) values ('3.MD.C.7b','Multiply side lengths to find areas of rectangles with whole-number side lengths in the context of solving real world and mathematical problems, and represent whole-number products as rectangular areas in mathematical reasoning.');

insert into standards (standard,description) values ('3.MD.C.7c','Use tiling to show in a concrete case that the area of a rectangle with whole-number side lengths a and b + c is the sum of a × b and a × c. Use area models to represent the distributive property in mathematical reasoning.');

insert into standards (standard,description) values ('3.MD.C.7d','Recognize area as additive. Find areas of rectilinear figures by decomposing them into non-overlapping rectangles and adding the areas of the non-overlapping parts, applying this technique to solve real world problems.');

insert into standards (standard,description) values ('3.MD.D.8','Solve real world and mathematical problems involving perimeters of polygons, including finding the perimeter given the side lengths, finding an unknown side length, and exhibiting rectangles with the same perimeter and different areas or with the same area and different perimeters.');

insert into standards (standard,description) values ('3.G.A.1','Understand that shapes in different categories (e.g., rhombuses, rectangles, and others) may share attributes (e.g., having four sides), and that the shared attributes can define a larger category (e.g., quadrilaterals). Recognize rhombuses, rectangles, and squares as examples of quadrilaterals, and draw examples of quadrilaterals that do not belong to any of these subcategories.');


insert into standards (standard,description) values ('3.G.A.2','Partition shapes into parts with equal areas. Express the area of each part as a unit fraction of the whole. For example, partition a shape into 4 parts with equal area, and describe the area of each part as 1/4 of the area of the shape.');

--insert into standards (standard,description) values ('','');
--insert into standards (standard,description) values ('','');
--insert into standards (standard,description) values ('','');
--insert into standards (standard,description) values ('','');
--insert into standards (standard,description) values ('','');
--insert into standards (standard,description) values ('','');
--insert into standards (standard,description) values ('','');
--insert into standards (standard,description) values ('','');
--insert into standards (standard,description) values ('','');
--insert into standards (standard,description) values ('','');
--insert into standards (standard,description) values ('','');
--insert into standards (standard,description) values ('','');
--insert into standards (standard,description) values ('','');
--insert into standards (standard,description) values ('','');
--insert into standards (standard,description) values ('','');
--insert into standards (standard,description) values ('','');
--insert into standards (standard,description) values ('','');
--insert into standards (standard,description) values ('','');
--insert into standards (standard,description) values ('','');
--insert into standards (standard,description) values ('','');
--insert into standards (standard,description) values ('','');
--insert into standards (standard,description) values ('','');
--insert into standards (standard,description) values ('','');
--insert into standards (standard,description) values ('','');
--insert into standards (standard,description) values ('','');
--insert into standards (standard,description) values ('','');
--insert into standards (standard,description) values ('','');
--insert into standards (standard,description) values ('','');
--insert into standards (standard,description) values ('','');
--insert into standards (standard,description) values ('','');
--insert into standards (standard,description) values ('','');
--insert into standards (standard,description) values ('','');
--insert into standards (standard,description) values ('','');
--insert into standards (standard,description) values ('','');
--insert into standards (standard,description) values ('','');
--insert into standards (standard,description) values ('','');
--insert into standards (standard,description) values ('','');
--insert into standards (standard,description) values ('','');
--insert into standards (standard,description) values ('','');



--GAMES	
insert into games (game) values ('k_cc_a_1');
insert into games (game) values ('k_cc_a_2');
insert into games (game) values ('k_cc_a_3');
insert into games (game) values ('k_oa_a_5');
insert into games (game) values ('1_oa_c_6');
insert into games (game) values ('2_oa_b_2');
insert into games (game) values ('3_oa_c_7');
insert into games (game) values ('k_oa_a_4');
insert into games (game) values ('k_cc_c_6'); 
insert into games (game) values ('k_oa_a_2'); 

--LEVELS	
insert into levels(id,description) values (0,'Start of Journey');       

--(((((((((((((((((((((((((((((((())))))))))))))))))))))))))))
		--LEVELS GAMES STANDARDS
--(((((((((((((((((((((((((((((((())))))))))))))))))))))))))))

		--LevelID:1, GameID:1, StandardID:1 Standard:K.CC.A.1 
insert into levels(id,description) values (1,'');          
insert into games_levels (level_id,game_id) values  (1,1); 
insert into levels_standards(level_id, standard_id) values (1,1);      

insert into levels(id,description) values (1.01,'');         
insert into games_levels (level_id,game_id) values  (1.01,1); 
insert into levels_standards(level_id, standard_id) values (1.01,1);       

insert into levels(id,description) values (1.02,'');        
insert into games_levels (level_id,game_id) values  (1.02,1);
insert into levels_standards(level_id, standard_id) values (1.02,1);       

insert into levels(id,description) values (1.03,'');        
insert into games_levels (level_id,game_id) values  (1.03,1); 
insert into levels_standards(level_id, standard_id) values (1.03,1);       

insert into levels(id,description) values (1.04,'');        
insert into games_levels (level_id,game_id) values  (1.04,1); 
insert into levels_standards(level_id, standard_id) values (1.04,1);        

insert into levels(id,description) values (1.05,'');         
insert into games_levels (level_id,game_id) values  (1.05,1); 
insert into levels_standards(level_id, standard_id) values (1.05,1);        

insert into levels(id,description) values (1.06,'');         
insert into games_levels (level_id,game_id) values  (1.06,1); 
insert into levels_standards(level_id, standard_id) values (1.06,1);       

insert into levels(id,description) values (1.07,'');        
insert into games_levels (level_id,game_id) values  (1.07,1); 
insert into levels_standards(level_id, standard_id) values (1.07,1);       

insert into levels(id,description) values (1.08,'');        
insert into games_levels (level_id,game_id) values  (1.08,1); 
insert into levels_standards(level_id, standard_id) values (1.08,1);       

insert into levels(id,description) values (1.09,'');        
insert into games_levels (level_id,game_id) values  (1.09,1);
insert into levels_standards(level_id, standard_id) values (1.09,1);       

insert into levels(id,description) values (1.10,'');        
insert into games_levels (level_id,game_id) values  (1.10,1); 
insert into levels_standards(level_id, standard_id) values (1.10,1);     


		--LevelID:2, GameID:2, StandardID:2 Standard:K.CC.A.2 
insert into levels(id,description) values (2,''); 
insert into games_levels (level_id,game_id) values  (2,2); 
insert into levels_standards(level_id, standard_id) values (2,2);       

insert into levels(id,description) values (2.01,''); 
insert into games_levels (level_id,game_id) values  (2.01,2); 
insert into levels_standards(level_id, standard_id) values (2.01,2);       

insert into levels(id,description) values (2.02,''); 
insert into games_levels (level_id,game_id) values  (2.02,2); 
insert into levels_standards(level_id, standard_id) values (2.02,2);       

insert into levels(id,description) values (2.03,''); 
insert into games_levels (level_id,game_id) values  (2.03,2); 
insert into levels_standards(level_id, standard_id) values (2.03,2);       

insert into levels(id,description) values (2.04,''); 
insert into games_levels (level_id,game_id) values  (2.04,2); 
insert into levels_standards(level_id, standard_id) values (2.04,2);       

insert into levels(id,description) values (2.05,''); 
insert into games_levels (level_id,game_id) values  (2.05,2); 
insert into levels_standards(level_id, standard_id) values (2.05,2);       


		--LevelID:3, GameID:3, StandardID:3 Standard:K.CC.A.3 
insert into levels(id,description) values (3,'K_CC_A_3'); 
insert into games_levels (level_id,game_id) values  (3,3); 
insert into levels_standards(level_id, standard_id) values (3,3);       
	
	
		--LevelID:8, GameID:9, StandardID:8 Standard:K.CC.C.6 
insert into levels(id,description) values (8,'K_CC_C_6'); 
insert into games_levels (level_id,game_id) values  (8,9); 
insert into levels_standards(level_id, standard_id) values (8,8);       
		
		--LevelID:11, GameID:10, StandardID:11 Standard:K.OA.A.2 
insert into levels(id,description) values (11,'K_OA_A_2'); 
insert into games_levels (level_id,game_id) values  (11,10); 
insert into levels_standards(level_id, standard_id) values (11,11);       


		--LevelID:13, GameID:8, StandardID:13 Standard:K.OA.A.4
insert into levels(id,description) values (13,'');
insert into games_levels (level_id,game_id) values  (13,8);
insert into levels_standards(level_id, standard_id) values (13,13);       

insert into levels(id,description) values (13.01,'');
insert into games_levels (level_id,game_id) values  (13.01,8);
insert into levels_standards(level_id, standard_id) values (13.01,13);       

insert into levels(id,description) values (13.02,'');
insert into games_levels (level_id,game_id) values  (13.02,8);
insert into levels_standards(level_id, standard_id) values (13.02,13);       

insert into levels(id,description) values (13.03,'');
insert into games_levels (level_id,game_id) values  (13.03,8);
insert into levels_standards(level_id, standard_id) values (13.03,13);       

insert into levels(id,description) values (13.04,'');
insert into games_levels (level_id,game_id) values  (13.04,8);
insert into levels_standards(level_id, standard_id) values (13.04,13);       

insert into levels(id,description) values (13.05,'');
insert into games_levels (level_id,game_id) values  (13.05,8);
insert into levels_standards(level_id, standard_id) values (13.05,13);       

insert into levels(id,description) values (13.06,'');
insert into games_levels (level_id,game_id) values  (13.06,8);
insert into levels_standards(level_id, standard_id) values (13.06,13);       

insert into levels(id,description) values (13.07,'');
insert into games_levels (level_id,game_id) values  (13.07,8);
insert into levels_standards(level_id, standard_id) values (13.07,13);       

insert into levels(id,description) values (13.08,'');
insert into games_levels (level_id,game_id) values  (13.08,8);
insert into levels_standards(level_id, standard_id) values (13.08,13);       

insert into levels(id,description) values (13.09,'');
insert into games_levels (level_id,game_id) values  (13.09,8);
insert into levels_standards(level_id, standard_id) values (13.09,13);       

insert into levels(id,description) values (13.10,'');
insert into games_levels (level_id,game_id) values  (13.10,8);
insert into levels_standards(level_id, standard_id) values (13.10,13);       

insert into levels(id,description) values (13.11,'');
insert into games_levels (level_id,game_id) values  (13.11,8);
insert into levels_standards(level_id, standard_id) values (13.11,13);       

insert into levels(id,description) values (13.12,'');
insert into games_levels (level_id,game_id) values  (13.12,8);
insert into levels_standards(level_id, standard_id) values (13.12,13);       

insert into levels(id,description) values (13.13,'');
insert into games_levels (level_id,game_id) values  (13.13,8);
insert into levels_standards(level_id, standard_id) values (13.13,13);       

insert into levels(id,description) values (13.14,'');
insert into games_levels (level_id,game_id) values  (13.14,8);
insert into levels_standards(level_id, standard_id) values (13.14,13);       

insert into levels(id,description) values (13.15,'');
insert into games_levels (level_id,game_id) values  (13.15,8);
insert into levels_standards(level_id, standard_id) values (13.15,13);       

insert into levels(id,description) values (13.16,'');
insert into games_levels (level_id,game_id) values  (13.16,8);
insert into levels_standards(level_id, standard_id) values (13.16,13);       

insert into levels(id,description) values (13.17,'');
insert into games_levels (level_id,game_id) values  (13.17,8);
insert into levels_standards(level_id, standard_id) values (13.17,13);       


		--LevelID:14, GameID:4, StandardID:14 Standard:K.OA.A.5
insert into levels(id,description) values (14,'');
insert into games_levels (level_id,game_id) values  (14,4);
insert into levels_standards(level_id, standard_id) values (14,14);       

insert into levels(id,description) values (14.01,'');
insert into games_levels (level_id,game_id) values  (14.01,4);
insert into levels_standards(level_id, standard_id) values (14.01,14);       

insert into levels(id,description) values (14.02,'');
insert into games_levels (level_id,game_id) values  (14.02,4);
insert into levels_standards(level_id, standard_id) values (14.02,14);       

insert into levels(id,description) values (14.03,'');
insert into games_levels (level_id,game_id) values  (14.03,4);
insert into levels_standards(level_id, standard_id) values (14.03,14);       

insert into levels(id,description) values (14.04,'');
insert into games_levels (level_id,game_id) values  (14.04,4);
insert into levels_standards(level_id, standard_id) values (14.04,14);       

insert into levels(id,description) values (14.05,'');
insert into games_levels (level_id,game_id) values  (14.05,4);
insert into levels_standards(level_id, standard_id) values (14.05,14);       

insert into levels(id,description) values (14.06,'');
insert into games_levels (level_id,game_id) values  (14.06,4);
insert into levels_standards(level_id, standard_id) values (14.06,14);       

insert into levels(id,description) values (14.07,'');
insert into games_levels (level_id,game_id) values  (14.07,4);
insert into levels_standards(level_id, standard_id) values (14.07,14);       

insert into levels(id,description) values (14.08,'');
insert into games_levels (level_id,game_id) values  (14.08,4);
insert into levels_standards(level_id, standard_id) values (14.08,14);       

insert into levels(id,description) values (14.09,'');
insert into games_levels (level_id,game_id) values  (14.09,4);
insert into levels_standards(level_id, standard_id) values (14.09,14);       

insert into levels(id,description) values (14.10,'');
insert into games_levels (level_id,game_id) values  (14.10,4);
insert into levels_standards(level_id, standard_id) values (14.10,14);       

insert into levels(id,description) values (14.11,'');
insert into games_levels (level_id,game_id) values  (14.11,4);
insert into levels_standards(level_id, standard_id) values (14.11,14);       

insert into levels(id,description) values (14.12,'');
insert into games_levels (level_id,game_id) values  (14.12,4);
insert into levels_standards(level_id, standard_id) values (14.12,14);       

insert into levels(id,description) values (14.13,'');
insert into games_levels (level_id,game_id) values  (14.13,4);
insert into levels_standards(level_id, standard_id) values (14.13,14);       

insert into levels(id,description) values (14.14,'');
insert into games_levels (level_id,game_id) values  (14.14,4);
insert into levels_standards(level_id, standard_id) values (14.14,14);       

insert into levels(id,description) values (14.15,'');
insert into games_levels (level_id,game_id) values  (14.15,4);
insert into levels_standards(level_id, standard_id) values (14.15,14);       

insert into levels(id,description) values (14.16,'');
insert into games_levels (level_id,game_id) values  (14.16,4);
insert into levels_standards(level_id, standard_id) values (14.16,14);       

insert into levels(id,description) values (14.17,'');
insert into games_levels (level_id,game_id) values  (14.17,4);
insert into levels_standards(level_id, standard_id) values (14.17,14);       

insert into levels(id,description) values (14.18,'');
insert into games_levels (level_id,game_id) values  (14.18,4);
insert into levels_standards(level_id, standard_id) values (14.18,14);       

insert into levels(id,description) values (14.19,'');
insert into games_levels (level_id,game_id) values  (14.19,4);
insert into levels_standards(level_id, standard_id) values (14.19,14);       

insert into levels(id,description) values (14.20,'');
insert into games_levels (level_id,game_id) values  (14.20,4);
insert into levels_standards(level_id, standard_id) values (14.20,14);   

insert into levels(id,description) values (14.21,'');
insert into games_levels (level_id,game_id) values  (14.21,4);
insert into levels_standards(level_id, standard_id) values (14.21,14);       

insert into levels(id,description) values (14.22,'');
insert into games_levels (level_id,game_id) values  (14.22,4);
insert into levels_standards(level_id, standard_id) values (14.22,14);       

insert into levels(id,description) values (14.23,'');
insert into games_levels (level_id,game_id) values  (14.23,4);
insert into levels_standards(level_id, standard_id) values (14.23,14);       

insert into levels(id,description) values (14.24,'');
insert into games_levels (level_id,game_id) values  (14.24,4);
insert into levels_standards(level_id, standard_id) values (14.24,14);       

insert into levels(id,description) values (14.25,'');
insert into games_levels (level_id,game_id) values  (14.25,4);
insert into levels_standards(level_id, standard_id) values (14.25,14);       

insert into levels(id,description) values (14.26,'');
insert into games_levels (level_id,game_id) values  (14.26,4);
insert into levels_standards(level_id, standard_id) values (14.26,14);       

insert into levels(id,description) values (14.27,'');
insert into games_levels (level_id,game_id) values  (14.27,4);
insert into levels_standards(level_id, standard_id) values (14.27,14);       

insert into levels(id,description) values (14.28,'');
insert into games_levels (level_id,game_id) values  (14.28,4);
insert into levels_standards(level_id, standard_id) values (14.28,14);       

insert into levels(id,description) values (14.29,'');
insert into games_levels (level_id,game_id) values  (14.29,4);
insert into levels_standards(level_id, standard_id) values (14.29,14);           


insert into levels(id,description) values (14.30,'');
insert into games_levels (level_id,game_id) values  (14.30,4);
insert into levels_standards(level_id, standard_id) values (14.30,14);   

insert into levels(id,description) values (14.31,'');
insert into games_levels (level_id,game_id) values  (14.31,4);
insert into levels_standards(level_id, standard_id) values (14.31,14);       

insert into levels(id,description) values (14.32,'');
insert into games_levels (level_id,game_id) values  (14.32,4);
insert into levels_standards(level_id, standard_id) values (14.32,14);       

insert into levels(id,description) values (14.33,'');
insert into games_levels (level_id,game_id) values  (14.33,4);
insert into levels_standards(level_id, standard_id) values (14.33,14);       

insert into levels(id,description) values (14.34,'');
insert into games_levels (level_id,game_id) values  (14.34,4);
insert into levels_standards(level_id, standard_id) values (14.34,14);       

insert into levels(id,description) values (14.35,'');
insert into games_levels (level_id,game_id) values  (14.35,4);
insert into levels_standards(level_id, standard_id) values (14.35,14);       

insert into levels(id,description) values (14.36,'');
insert into games_levels (level_id,game_id) values  (14.36,4);
insert into levels_standards(level_id, standard_id) values (14.36,14);       

insert into levels(id,description) values (14.37,'');
insert into games_levels (level_id,game_id) values  (14.37,4);
insert into levels_standards(level_id, standard_id) values (14.37,14);       

insert into levels(id,description) values (14.38,'');
insert into games_levels (level_id,game_id) values  (14.38,4);
insert into levels_standards(level_id, standard_id) values (14.38,14);       

insert into levels(id,description) values (14.39,'');
insert into games_levels (level_id,game_id) values  (14.39,4);
insert into levels_standards(level_id, standard_id) values (14.39,14);              

insert into levels(id,description) values (14.40,'');
insert into games_levels (level_id,game_id) values  (14.40,4);
insert into levels_standards(level_id, standard_id) values (14.40,14);   

insert into levels(id,description) values (14.41,'');
insert into games_levels (level_id,game_id) values  (14.41,4);
insert into levels_standards(level_id, standard_id) values (14.41,14);       

		--LevelID:30, GameID:5, StandardID:30 Standard:1.OA.C.6
insert into levels(id,description) values (30,'');
insert into games_levels (level_id,game_id) values  (30,5);
insert into levels_standards(level_id, standard_id) values (30,30);       

insert into levels(id,description) values (30.01,'');
insert into games_levels (level_id,game_id) values  (30.01,5);
insert into levels_standards(level_id, standard_id) values (30.01,30);       

insert into levels(id,description) values (30.02,'');
insert into games_levels (level_id,game_id) values  (30.02,5);
insert into levels_standards(level_id, standard_id) values (30.02,30);       

insert into levels(id,description) values (30.03,'');
insert into games_levels (level_id,game_id) values  (30.03,5);
insert into levels_standards(level_id, standard_id) values (30.03,30);       

insert into levels(id,description) values (30.04,'');
insert into games_levels (level_id,game_id) values  (30.04,5);
insert into levels_standards(level_id, standard_id) values (30.04,30);       

insert into levels(id,description) values (30.05,'');
insert into games_levels (level_id,game_id) values  (30.05,5);
insert into levels_standards(level_id, standard_id) values (30.05,30);       

insert into levels(id,description) values (30.06,'');
insert into games_levels (level_id,game_id) values  (30.06,5);
insert into levels_standards(level_id, standard_id) values (30.06,30);       

insert into levels(id,description) values (30.07,'');
insert into games_levels (level_id,game_id) values  (30.07,5);
insert into levels_standards(level_id, standard_id) values (30.07,30);       

insert into levels(id,description) values (30.08,'');
insert into games_levels (level_id,game_id) values  (30.08,5);
insert into levels_standards(level_id, standard_id) values (30.08,30);       

insert into levels(id,description) values (30.09,'');
insert into games_levels (level_id,game_id) values  (30.09,5);
insert into levels_standards(level_id, standard_id) values (30.09,30);       

insert into levels(id,description) values (30.10,'');
insert into games_levels (level_id,game_id) values  (30.10,5);
insert into levels_standards(level_id, standard_id) values (30.10,30);       

insert into levels(id,description) values (30.11,'');
insert into games_levels (level_id,game_id) values  (30.11,5);
insert into levels_standards(level_id, standard_id) values (30.11,30);       

insert into levels(id,description) values (30.12,'');
insert into games_levels (level_id,game_id) values  (30.12,5);
insert into levels_standards(level_id, standard_id) values (30.12,30);       


insert into levels(id,description) values (30.13,'');
insert into games_levels (level_id,game_id) values  (30.13,5);
insert into levels_standards(level_id, standard_id) values (30.13,30);       

insert into levels(id,description) values (30.14,'');
insert into games_levels (level_id,game_id) values  (30.14,5);
insert into levels_standards(level_id, standard_id) values (30.14,30);       


insert into levels(id,description) values (30.15,'');
insert into games_levels (level_id,game_id) values  (30.15,5);
insert into levels_standards(level_id, standard_id) values (30.15,30);       

insert into levels(id,description) values (30.16,'');
insert into games_levels (level_id,game_id) values  (30.16,5);
insert into levels_standards(level_id, standard_id) values (30.16,30);       

insert into levels(id,description) values (30.17,'');
insert into games_levels (level_id,game_id) values  (30.17,5);
insert into levels_standards(level_id, standard_id) values (30.17,30);       

insert into levels(id,description) values (30.18,'');
insert into games_levels (level_id,game_id) values  (30.18,5);
insert into levels_standards(level_id, standard_id) values (30.18,30);       

insert into levels(id,description) values (30.19,'');
insert into games_levels (level_id,game_id) values  (30.19,5);
insert into levels_standards(level_id, standard_id) values (30.19,30);       

insert into levels(id,description) values (30.20,'');
insert into games_levels (level_id,game_id) values  (30.20,5);
insert into levels_standards(level_id, standard_id) values (30.20,30);       

insert into levels(id,description) values (30.21,'');
insert into games_levels (level_id,game_id) values  (30.21,5);
insert into levels_standards(level_id, standard_id) values (30.21,30);       

insert into levels(id,description) values (30.22,'');
insert into games_levels (level_id,game_id) values  (30.22,5);
insert into levels_standards(level_id, standard_id) values (30.22,30);       

insert into levels(id,description) values (30.23,'');
insert into games_levels (level_id,game_id) values  (30.23,5);
insert into levels_standards(level_id, standard_id) values (30.23,30);       

insert into levels(id,description) values (30.24,'');
insert into games_levels (level_id,game_id) values  (30.24,5);
insert into levels_standards(level_id, standard_id) values (30.24,30);       

insert into levels(id,description) values (30.25,'');
insert into games_levels (level_id,game_id) values  (30.25,5);
insert into levels_standards(level_id, standard_id) values (30.25,30);       

insert into levels(id,description) values (30.26,'');
insert into games_levels (level_id,game_id) values  (30.26,5);
insert into levels_standards(level_id, standard_id) values (30.26,30);       

insert into levels(id,description) values (30.27,'');
insert into games_levels (level_id,game_id) values  (30.27,5);
insert into levels_standards(level_id, standard_id) values (30.27,30);       

insert into levels(id,description) values (30.28,'');
insert into games_levels (level_id,game_id) values  (30.28,5);
insert into levels_standards(level_id, standard_id) values (30.28,30);       

insert into levels(id,description) values (30.29,'');
insert into games_levels (level_id,game_id) values  (30.29,5);
insert into levels_standards(level_id, standard_id) values (30.29,30);       

insert into levels(id,description) values (30.30,'');
insert into games_levels (level_id,game_id) values  (30.30,5);
insert into levels_standards(level_id, standard_id) values (30.30,30);       

insert into levels(id,description) values (30.31,'');
insert into games_levels (level_id,game_id) values  (30.31,5);
insert into levels_standards(level_id, standard_id) values (30.31,30);       

insert into levels(id,description) values (30.32,'');
insert into games_levels (level_id,game_id) values  (30.32,5);
insert into levels_standards(level_id, standard_id) values (30.32,30);       

insert into levels(id,description) values (30.33,'');
insert into games_levels (level_id,game_id) values  (30.33,5);
insert into levels_standards(level_id, standard_id) values (30.33,30);       

insert into levels(id,description) values (30.34,'');
insert into games_levels (level_id,game_id) values  (30.34,5);
insert into levels_standards(level_id, standard_id) values (30.34,30);       

insert into levels(id,description) values (30.35,'');
insert into games_levels (level_id,game_id) values  (30.35,5);
insert into levels_standards(level_id, standard_id) values (30.35,30);       

insert into levels(id,description) values (30.36,'');
insert into games_levels (level_id,game_id) values  (30.36,5);
insert into levels_standards(level_id, standard_id) values (30.36,30);       

insert into levels(id,description) values (30.37,'');
insert into games_levels (level_id,game_id) values  (30.37,5);
insert into levels_standards(level_id, standard_id) values (30.37,30);       

insert into levels(id,description) values (30.38,'');
insert into games_levels (level_id,game_id) values  (30.38,5);
insert into levels_standards(level_id, standard_id) values (30.38,30);       

insert into levels(id,description) values (30.39,'');
insert into games_levels (level_id,game_id) values  (30.39,5);
insert into levels_standards(level_id, standard_id) values (30.39,30);       


insert into levels(id,description) values (30.40,'');
insert into games_levels (level_id,game_id) values  (30.40,5);
insert into levels_standards(level_id, standard_id) values (30.40,30);       

insert into levels(id,description) values (30.41,'');
insert into games_levels (level_id,game_id) values  (30.41,5);
insert into levels_standards(level_id, standard_id) values (30.41,30);       

insert into levels(id,description) values (30.42,'');
insert into games_levels (level_id,game_id) values  (30.42,5);
insert into levels_standards(level_id, standard_id) values (30.42,30);       

insert into levels(id,description) values (30.43,'');
insert into games_levels (level_id,game_id) values  (30.43,5);
insert into levels_standards(level_id, standard_id) values (30.43,30);       

insert into levels(id,description) values (30.44,'');
insert into games_levels (level_id,game_id) values  (30.44,5);
insert into levels_standards(level_id, standard_id) values (30.44,30);       

insert into levels(id,description) values (30.45,'');
insert into games_levels (level_id,game_id) values  (30.45,5);
insert into levels_standards(level_id, standard_id) values (30.45,30);       

insert into levels(id,description) values (30.46,'');
insert into games_levels (level_id,game_id) values  (30.46,5);
insert into levels_standards(level_id, standard_id) values (30.46,30);       

insert into levels(id,description) values (30.47,'');
insert into games_levels (level_id,game_id) values  (30.47,5);
insert into levels_standards(level_id, standard_id) values (30.47,30);       

insert into levels(id,description) values (30.48,'');
insert into games_levels (level_id,game_id) values  (30.48,5);
insert into levels_standards(level_id, standard_id) values (30.48,30);       

insert into levels(id,description) values (30.49,'');
insert into games_levels (level_id,game_id) values  (30.49,5);
insert into levels_standards(level_id, standard_id) values (30.49,30);       

insert into levels(id,description) values (30.50,'');
insert into games_levels (level_id,game_id) values  (30.50,5);
insert into levels_standards(level_id, standard_id) values (30.50,30);       

insert into levels(id,description) values (30.51,'');
insert into games_levels (level_id,game_id) values  (30.51,5);
insert into levels_standards(level_id, standard_id) values (30.51,30);       

insert into levels(id,description) values (30.52,'');
insert into games_levels (level_id,game_id) values  (30.52,5);
insert into levels_standards(level_id, standard_id) values (30.52,30);       

insert into levels(id,description) values (30.53,'');
insert into games_levels (level_id,game_id) values  (30.53,5);
insert into levels_standards(level_id, standard_id) values (30.53,30);       

insert into levels(id,description) values (30.54,'');
insert into games_levels (level_id,game_id) values  (30.54,5);
insert into levels_standards(level_id, standard_id) values (30.54,30);       

insert into levels(id,description) values (30.55,'');
insert into games_levels (level_id,game_id) values  (30.55,5);
insert into levels_standards(level_id, standard_id) values (30.55,30);       

insert into levels(id,description) values (30.56,'');
insert into games_levels (level_id,game_id) values  (30.56,5);
insert into levels_standards(level_id, standard_id) values (30.56,30);       

insert into levels(id,description) values (30.57,'');
insert into games_levels (level_id,game_id) values  (30.57,5);
insert into levels_standards(level_id, standard_id) values (30.57,30);       

insert into levels(id,description) values (30.58,'');
insert into games_levels (level_id,game_id) values  (30.58,5);
insert into levels_standards(level_id, standard_id) values (30.58,30);       

insert into levels(id,description) values (30.59,'');
insert into games_levels (level_id,game_id) values  (30.59,5);
insert into levels_standards(level_id, standard_id) values (30.59,30);       

insert into levels(id,description) values (30.60,'');
insert into games_levels (level_id,game_id) values  (30.60,5);
insert into levels_standards(level_id, standard_id) values (30.60,30);       

insert into levels(id,description) values (30.61,'');
insert into games_levels (level_id,game_id) values  (30.61,5);
insert into levels_standards(level_id, standard_id) values (30.61,30);       

insert into levels(id,description) values (30.62,'');
insert into games_levels (level_id,game_id) values  (30.62,5);
insert into levels_standards(level_id, standard_id) values (30.62,30);       

insert into levels(id,description) values (30.63,'');
insert into games_levels (level_id,game_id) values  (30.63,5);
insert into levels_standards(level_id, standard_id) values (30.63,30);       

insert into levels(id,description) values (30.64,'');
insert into games_levels (level_id,game_id) values  (30.64,5);
insert into levels_standards(level_id, standard_id) values (30.64,30);       

insert into levels(id,description) values (30.65,'');
insert into games_levels (level_id,game_id) values  (30.65,5);
insert into levels_standards(level_id, standard_id) values (30.65,30);       

insert into levels(id,description) values (30.66,'');
insert into games_levels (level_id,game_id) values  (30.66,5);
insert into levels_standards(level_id, standard_id) values (30.66,30);       

insert into levels(id,description) values (30.67,'');
insert into games_levels (level_id,game_id) values  (30.67,5);
insert into levels_standards(level_id, standard_id) values (30.67,30);       

insert into levels(id,description) values (30.68,'');
insert into games_levels (level_id,game_id) values  (30.68,5);
insert into levels_standards(level_id, standard_id) values (30.68,30);       

insert into levels(id,description) values (30.69,'');
insert into games_levels (level_id,game_id) values  (30.69,5);
insert into levels_standards(level_id, standard_id) values (30.69,30);       


insert into levels(id,description) values (30.70,'');
insert into games_levels (level_id,game_id) values  (30.70,5);
insert into levels_standards(level_id, standard_id) values (30.70,30);       

insert into levels(id,description) values (30.71,'');
insert into games_levels (level_id,game_id) values  (30.71,5);
insert into levels_standards(level_id, standard_id) values (30.71,30);       

insert into levels(id,description) values (30.72,'');
insert into games_levels (level_id,game_id) values  (30.72,5);
insert into levels_standards(level_id, standard_id) values (30.72,30);       

insert into levels(id,description) values (30.73,'');
insert into games_levels (level_id,game_id) values  (30.73,5);
insert into levels_standards(level_id, standard_id) values (30.73,30);       

insert into levels(id,description) values (30.74,'');
insert into games_levels (level_id,game_id) values  (30.74,5);
insert into levels_standards(level_id, standard_id) values (30.74,30);       

insert into levels(id,description) values (30.75,'');
insert into games_levels (level_id,game_id) values  (30.75,5);
insert into levels_standards(level_id, standard_id) values (30.75,30);       

insert into levels(id,description) values (30.76,'');
insert into games_levels (level_id,game_id) values  (30.76,5);
insert into levels_standards(level_id, standard_id) values (30.76,30);       

insert into levels(id,description) values (30.77,'');
insert into games_levels (level_id,game_id) values  (30.77,5);
insert into levels_standards(level_id, standard_id) values (30.77,30);       

insert into levels(id,description) values (30.78,'');
insert into games_levels (level_id,game_id) values  (30.78,5);
insert into levels_standards(level_id, standard_id) values (30.78,30);       

		--LevelID:48, GameID:6, StandardID:48 Standard:2.OA.B.2
insert into levels(id,description) values (48,'');
insert into games_levels (level_id,game_id) values  (48,6);
insert into levels_standards(level_id, standard_id) values (48,48);       

insert into levels(id,description) values (48.001,'');
insert into games_levels (level_id,game_id) values  (48.001,6);
insert into levels_standards(level_id, standard_id) values (48.001,48);       

insert into levels(id,description) values (48.002,'');
insert into games_levels (level_id,game_id) values  (48.002,6);
insert into levels_standards(level_id, standard_id) values (48.002,48);       

insert into levels(id,description) values (48.003,'');
insert into games_levels (level_id,game_id) values  (48.003,6);
insert into levels_standards(level_id, standard_id) values (48.003,48);       

insert into levels(id,description) values (48.004,'');
insert into games_levels (level_id,game_id) values  (48.004,6);
insert into levels_standards(level_id, standard_id) values (48.004,48);       

insert into levels(id,description) values (48.005,'');
insert into games_levels (level_id,game_id) values  (48.005,6);
insert into levels_standards(level_id, standard_id) values (48.005,48);       

insert into levels(id,description) values (48.006,'');
insert into games_levels (level_id,game_id) values  (48.006,6);
insert into levels_standards(level_id, standard_id) values (48.006,48);       

insert into levels(id,description) values (48.007,'');
insert into games_levels (level_id,game_id) values  (48.007,6);
insert into levels_standards(level_id, standard_id) values (48.007,48);       

insert into levels(id,description) values (48.008,'');
insert into games_levels (level_id,game_id) values  (48.008,6);
insert into levels_standards(level_id, standard_id) values (48.008,48);       

insert into levels(id,description) values (48.009,'');
insert into games_levels (level_id,game_id) values  (48.009,6);
insert into levels_standards(level_id, standard_id) values (48.009,48);       

insert into levels(id,description) values (48.010,'');
insert into games_levels (level_id,game_id) values  (48.010,6);
insert into levels_standards(level_id, standard_id) values (48.010,48);       

insert into levels(id,description) values (48.011,'');
insert into games_levels (level_id,game_id) values  (48.011,6);
insert into levels_standards(level_id, standard_id) values (48.011,48);       

insert into levels(id,description) values (48.012,'');
insert into games_levels (level_id,game_id) values  (48.012,6);
insert into levels_standards(level_id, standard_id) values (48.012,48);       

insert into levels(id,description) values (48.013,'');
insert into games_levels (level_id,game_id) values  (48.013,6);
insert into levels_standards(level_id, standard_id) values (48.013,48);       

insert into levels(id,description) values (48.014,'');
insert into games_levels (level_id,game_id) values  (48.014,6);
insert into levels_standards(level_id, standard_id) values (48.014,48);       

insert into levels(id,description) values (48.015,'');
insert into games_levels (level_id,game_id) values  (48.015,6);
insert into levels_standards(level_id, standard_id) values (48.015,48);       


insert into levels(id,description) values (48.016,'');
insert into games_levels (level_id,game_id) values  (48.016,6);
insert into levels_standards(level_id, standard_id) values (48.016,48);       

insert into levels(id,description) values (48.017,'');
insert into games_levels (level_id,game_id) values  (48.017,6);
insert into levels_standards(level_id, standard_id) values (48.017,48);       

insert into levels(id,description) values (48.018,'');
insert into games_levels (level_id,game_id) values  (48.018,6);
insert into levels_standards(level_id, standard_id) values (48.018,48);       

insert into levels(id,description) values (48.019,'');
insert into games_levels (level_id,game_id) values  (48.019,6);
insert into levels_standards(level_id, standard_id) values (48.019,48);       

insert into levels(id,description) values (48.020,'');
insert into games_levels (level_id,game_id) values  (48.020,6);
insert into levels_standards(level_id, standard_id) values (48.020,48);       

insert into levels(id,description) values (48.021,'');
insert into games_levels (level_id,game_id) values  (48.021,6);
insert into levels_standards(level_id, standard_id) values (48.021,48);       

insert into levels(id,description) values (48.022,'');
insert into games_levels (level_id,game_id) values  (48.022,6);
insert into levels_standards(level_id, standard_id) values (48.022,48);       

insert into levels(id,description) values (48.023,'');
insert into games_levels (level_id,game_id) values  (48.023,6);
insert into levels_standards(level_id, standard_id) values (48.023,48);       

insert into levels(id,description) values (48.024,'');
insert into games_levels (level_id,game_id) values  (48.024,6);
insert into levels_standards(level_id, standard_id) values (48.024,48);       

insert into levels(id,description) values (48.025,'');
insert into games_levels (level_id,game_id) values  (48.025,6);
insert into levels_standards(level_id, standard_id) values (48.025,48);       

insert into levels(id,description) values (48.026,'');
insert into games_levels (level_id,game_id) values  (48.026,6);
insert into levels_standards(level_id, standard_id) values (48.026,48);       

insert into levels(id,description) values (48.027,'');
insert into games_levels (level_id,game_id) values  (48.027,6);
insert into levels_standards(level_id, standard_id) values (48.027,48);       

insert into levels(id,description) values (48.028,'');
insert into games_levels (level_id,game_id) values  (48.028,6);
insert into levels_standards(level_id, standard_id) values (48.028,48);       

insert into levels(id,description) values (48.029,'');
insert into games_levels (level_id,game_id) values  (48.029,6);
insert into levels_standards(level_id, standard_id) values (48.029,48);       

insert into levels(id,description) values (48.030,'');
insert into games_levels (level_id,game_id) values  (48.030,6);
insert into levels_standards(level_id, standard_id) values (48.030,48);       

insert into levels(id,description) values (48.031,'');
insert into games_levels (level_id,game_id) values  (48.031,6);
insert into levels_standards(level_id, standard_id) values (48.031,48);       

insert into levels(id,description) values (48.032,'');
insert into games_levels (level_id,game_id) values  (48.032,6);
insert into levels_standards(level_id, standard_id) values (48.032,48);       

insert into levels(id,description) values (48.033,'');
insert into games_levels (level_id,game_id) values  (48.033,6);
insert into levels_standards(level_id, standard_id) values (48.033,48);       

insert into levels(id,description) values (48.034,'');
insert into games_levels (level_id,game_id) values  (48.034,6);
insert into levels_standards(level_id, standard_id) values (48.034,48);       

insert into levels(id,description) values (48.035,'');
insert into games_levels (level_id,game_id) values  (48.035,6);
insert into levels_standards(level_id, standard_id) values (48.035,48);       

insert into levels(id,description) values (48.036,'');
insert into games_levels (level_id,game_id) values  (48.036,6);
insert into levels_standards(level_id, standard_id) values (48.036,48);       

insert into levels(id,description) values (48.037,'');
insert into games_levels (level_id,game_id) values  (48.037,6);
insert into levels_standards(level_id, standard_id) values (48.037,48);       

insert into levels(id,description) values (48.038,'');
insert into games_levels (level_id,game_id) values  (48.038,6);
insert into levels_standards(level_id, standard_id) values (48.038,48);       

insert into levels(id,description) values (48.039,'');
insert into games_levels (level_id,game_id) values  (48.039,6);
insert into levels_standards(level_id, standard_id) values (48.039,48);       

insert into levels(id,description) values (48.040,'');
insert into games_levels (level_id,game_id) values  (48.040,6);
insert into levels_standards(level_id, standard_id) values (48.040,48);       

insert into levels(id,description) values (48.041,'');
insert into games_levels (level_id,game_id) values  (48.041,6);
insert into levels_standards(level_id, standard_id) values (48.041,48);       

insert into levels(id,description) values (48.042,'');
insert into games_levels (level_id,game_id) values  (48.042,6);
insert into levels_standards(level_id, standard_id) values (48.042,48);       

insert into levels(id,description) values (48.043,'');
insert into games_levels (level_id,game_id) values  (48.043,6);
insert into levels_standards(level_id, standard_id) values (48.043,48);       

insert into levels(id,description) values (48.044,'');
insert into games_levels (level_id,game_id) values  (48.044,6);
insert into levels_standards(level_id, standard_id) values (48.044,48);       

insert into levels(id,description) values (48.045,'');
insert into games_levels (level_id,game_id) values  (48.045,6);
insert into levels_standards(level_id, standard_id) values (48.045,48);       

insert into levels(id,description) values (48.046,'');
insert into games_levels (level_id,game_id) values  (48.046,6);
insert into levels_standards(level_id, standard_id) values (48.046,48);       

insert into levels(id,description) values (48.047,'');
insert into games_levels (level_id,game_id) values  (48.047,6);
insert into levels_standards(level_id, standard_id) values (48.047,48);       

insert into levels(id,description) values (48.048,'');
insert into games_levels (level_id,game_id) values  (48.048,6);
insert into levels_standards(level_id, standard_id) values (48.048,48);       

insert into levels(id,description) values (48.049,'');
insert into games_levels (level_id,game_id) values  (48.049,6);
insert into levels_standards(level_id, standard_id) values (48.049,48);       

insert into levels(id,description) values (48.050,'');
insert into games_levels (level_id,game_id) values  (48.050,6);
insert into levels_standards(level_id, standard_id) values (48.050,48);       

insert into levels(id,description) values (48.051,'');
insert into games_levels (level_id,game_id) values  (48.051,6);
insert into levels_standards(level_id, standard_id) values (48.051,48);       

insert into levels(id,description) values (48.052,'');
insert into games_levels (level_id,game_id) values  (48.052,6);
insert into levels_standards(level_id, standard_id) values (48.052,48);       

insert into levels(id,description) values (48.053,'');
insert into games_levels (level_id,game_id) values  (48.053,6);
insert into levels_standards(level_id, standard_id) values (48.053,48);       

insert into levels(id,description) values (48.054,'');
insert into games_levels (level_id,game_id) values  (48.054,6);
insert into levels_standards(level_id, standard_id) values (48.054,48);       

insert into levels(id,description) values (48.055,'');
insert into games_levels (level_id,game_id) values  (48.055,6);
insert into levels_standards(level_id, standard_id) values (48.055,48);       

insert into levels(id,description) values (48.056,'');
insert into games_levels (level_id,game_id) values  (48.056,6);
insert into levels_standards(level_id, standard_id) values (48.056,48);       

insert into levels(id,description) values (48.057,'');
insert into games_levels (level_id,game_id) values  (48.057,6);
insert into levels_standards(level_id, standard_id) values (48.057,48);       

insert into levels(id,description) values (48.058,'');
insert into games_levels (level_id,game_id) values  (48.058,6);
insert into levels_standards(level_id, standard_id) values (48.058,48);       

insert into levels(id,description) values (48.059,'');
insert into games_levels (level_id,game_id) values  (48.059,6);
insert into levels_standards(level_id, standard_id) values (48.059,48);    

insert into levels(id,description) values (48.060,'');
insert into games_levels (level_id,game_id) values  (48.060,6);
insert into levels_standards(level_id, standard_id) values (48.060,48);       

insert into levels(id,description) values (48.061,'');
insert into games_levels (level_id,game_id) values  (48.061,6);
insert into levels_standards(level_id, standard_id) values (48.061,48);       

insert into levels(id,description) values (48.062,'');
insert into games_levels (level_id,game_id) values  (48.062,6);
insert into levels_standards(level_id, standard_id) values (48.062,48);       

insert into levels(id,description) values (48.063,'');
insert into games_levels (level_id,game_id) values  (48.063,6);
insert into levels_standards(level_id, standard_id) values (48.063,48);       

insert into levels(id,description) values (48.064,'');
insert into games_levels (level_id,game_id) values  (48.064,6);
insert into levels_standards(level_id, standard_id) values (48.064,48);       

insert into levels(id,description) values (48.065,'');
insert into games_levels (level_id,game_id) values  (48.065,6);
insert into levels_standards(level_id, standard_id) values (48.065,48);       

insert into levels(id,description) values (48.066,'');
insert into games_levels (level_id,game_id) values  (48.066,6);
insert into levels_standards(level_id, standard_id) values (48.066,48);       

insert into levels(id,description) values (48.067,'');
insert into games_levels (level_id,game_id) values  (48.067,6);
insert into levels_standards(level_id, standard_id) values (48.067,48);       

insert into levels(id,description) values (48.068,'');
insert into games_levels (level_id,game_id) values  (48.068,6);
insert into levels_standards(level_id, standard_id) values (48.068,48);       

insert into levels(id,description) values (48.069,'');
insert into games_levels (level_id,game_id) values  (48.069,6);
insert into levels_standards(level_id, standard_id) values (48.069,48);    

insert into levels(id,description) values (48.070,'');
insert into games_levels (level_id,game_id) values  (48.070,6);
insert into levels_standards(level_id, standard_id) values (48.070,48);       

insert into levels(id,description) values (48.071,'');
insert into games_levels (level_id,game_id) values  (48.071,6);
insert into levels_standards(level_id, standard_id) values (48.071,48);       

insert into levels(id,description) values (48.072,'');
insert into games_levels (level_id,game_id) values  (48.072,6);
insert into levels_standards(level_id, standard_id) values (48.072,48);       

insert into levels(id,description) values (48.073,'');
insert into games_levels (level_id,game_id) values  (48.073,6);
insert into levels_standards(level_id, standard_id) values (48.073,48);       

insert into levels(id,description) values (48.074,'');
insert into games_levels (level_id,game_id) values  (48.074,6);
insert into levels_standards(level_id, standard_id) values (48.074,48);       

insert into levels(id,description) values (48.075,'');
insert into games_levels (level_id,game_id) values  (48.075,6);
insert into levels_standards(level_id, standard_id) values (48.075,48);       

insert into levels(id,description) values (48.076,'');
insert into games_levels (level_id,game_id) values  (48.076,6);
insert into levels_standards(level_id, standard_id) values (48.076,48);       

insert into levels(id,description) values (48.077,'');
insert into games_levels (level_id,game_id) values  (48.077,6);
insert into levels_standards(level_id, standard_id) values (48.077,48);       

insert into levels(id,description) values (48.078,'');
insert into games_levels (level_id,game_id) values  (48.078,6);
insert into levels_standards(level_id, standard_id) values (48.078,48);       

insert into levels(id,description) values (48.079,'');
insert into games_levels (level_id,game_id) values  (48.079,6);
insert into levels_standards(level_id, standard_id) values (48.079,48);    

insert into levels(id,description) values (48.080,'');
insert into games_levels (level_id,game_id) values  (48.080,6);
insert into levels_standards(level_id, standard_id) values (48.080,48);       

insert into levels(id,description) values (48.081,'');
insert into games_levels (level_id,game_id) values  (48.081,6);
insert into levels_standards(level_id, standard_id) values (48.081,48);       

insert into levels(id,description) values (48.082,'');
insert into games_levels (level_id,game_id) values  (48.082,6);
insert into levels_standards(level_id, standard_id) values (48.082,48);       

insert into levels(id,description) values (48.083,'');
insert into games_levels (level_id,game_id) values  (48.083,6);
insert into levels_standards(level_id, standard_id) values (48.083,48);       

insert into levels(id,description) values (48.084,'');
insert into games_levels (level_id,game_id) values  (48.084,6);
insert into levels_standards(level_id, standard_id) values (48.084,48);       

insert into levels(id,description) values (48.085,'');
insert into games_levels (level_id,game_id) values  (48.085,6);
insert into levels_standards(level_id, standard_id) values (48.085,48);       

insert into levels(id,description) values (48.086,'');
insert into games_levels (level_id,game_id) values  (48.086,6);
insert into levels_standards(level_id, standard_id) values (48.086,48);       

insert into levels(id,description) values (48.087,'');
insert into games_levels (level_id,game_id) values  (48.087,6);
insert into levels_standards(level_id, standard_id) values (48.087,48);       

insert into levels(id,description) values (48.088,'');
insert into games_levels (level_id,game_id) values  (48.088,6);
insert into levels_standards(level_id, standard_id) values (48.088,48);       

insert into levels(id,description) values (48.089,'');
insert into games_levels (level_id,game_id) values  (48.089,6);
insert into levels_standards(level_id, standard_id) values (48.089,48);    

insert into levels(id,description) values (48.090,'');
insert into games_levels (level_id,game_id) values  (48.090,6);
insert into levels_standards(level_id, standard_id) values (48.090,48);       

insert into levels(id,description) values (48.091,'');
insert into games_levels (level_id,game_id) values  (48.091,6);
insert into levels_standards(level_id, standard_id) values (48.091,48);       

insert into levels(id,description) values (48.092,'');
insert into games_levels (level_id,game_id) values  (48.092,6);
insert into levels_standards(level_id, standard_id) values (48.092,48);       

insert into levels(id,description) values (48.093,'');
insert into games_levels (level_id,game_id) values  (48.093,6);
insert into levels_standards(level_id, standard_id) values (48.093,48);       

insert into levels(id,description) values (48.094,'');
insert into games_levels (level_id,game_id) values  (48.094,6);
insert into levels_standards(level_id, standard_id) values (48.094,48);       

insert into levels(id,description) values (48.095,'');
insert into games_levels (level_id,game_id) values  (48.095,6);
insert into levels_standards(level_id, standard_id) values (48.095,48);       

insert into levels(id,description) values (48.096,'');
insert into games_levels (level_id,game_id) values  (48.096,6);
insert into levels_standards(level_id, standard_id) values (48.096,48);       

insert into levels(id,description) values (48.097,'');
insert into games_levels (level_id,game_id) values  (48.097,6);
insert into levels_standards(level_id, standard_id) values (48.097,48);       

insert into levels(id,description) values (48.098,'');
insert into games_levels (level_id,game_id) values  (48.098,6);
insert into levels_standards(level_id, standard_id) values (48.098,48);       

insert into levels(id,description) values (48.099,'');
insert into games_levels (level_id,game_id) values  (48.099,6);
insert into levels_standards(level_id, standard_id) values (48.099,48);    

insert into levels(id,description) values (48.100,'');
insert into games_levels (level_id,game_id) values  (48.100,6);
insert into levels_standards(level_id, standard_id) values (48.100,48);       

insert into levels(id,description) values (48.101,'');
insert into games_levels (level_id,game_id) values  (48.101,6);
insert into levels_standards(level_id, standard_id) values (48.101,48);       

insert into levels(id,description) values (48.102,'');
insert into games_levels (level_id,game_id) values  (48.102,6);
insert into levels_standards(level_id, standard_id) values (48.102,48);       

insert into levels(id,description) values (48.103,'');
insert into games_levels (level_id,game_id) values  (48.103,6);
insert into levels_standards(level_id, standard_id) values (48.103,48);       

insert into levels(id,description) values (48.104,'');
insert into games_levels (level_id,game_id) values  (48.104,6);
insert into levels_standards(level_id, standard_id) values (48.104,48);       

insert into levels(id,description) values (48.105,'');
insert into games_levels (level_id,game_id) values  (48.105,6);
insert into levels_standards(level_id, standard_id) values (48.105,48);       

insert into levels(id,description) values (48.106,'');
insert into games_levels (level_id,game_id) values  (48.106,6);
insert into levels_standards(level_id, standard_id) values (48.106,48);       

insert into levels(id,description) values (48.107,'');
insert into games_levels (level_id,game_id) values  (48.107,6);
insert into levels_standards(level_id, standard_id) values (48.107,48);       

insert into levels(id,description) values (48.108,'');
insert into games_levels (level_id,game_id) values  (48.108,6);
insert into levels_standards(level_id, standard_id) values (48.108,48);       

insert into levels(id,description) values (48.109,'');
insert into games_levels (level_id,game_id) values  (48.109,6);
insert into levels_standards(level_id, standard_id) values (48.109,48);    

insert into levels(id,description) values (48.110,'');
insert into games_levels (level_id,game_id) values  (48.110,6);
insert into levels_standards(level_id, standard_id) values (48.110,48);       

insert into levels(id,description) values (48.111,'');
insert into games_levels (level_id,game_id) values  (48.111,6);
insert into levels_standards(level_id, standard_id) values (48.111,48);       

insert into levels(id,description) values (48.112,'');
insert into games_levels (level_id,game_id) values  (48.112,6);
insert into levels_standards(level_id, standard_id) values (48.112,48);       

insert into levels(id,description) values (48.113,'');
insert into games_levels (level_id,game_id) values  (48.113,6);
insert into levels_standards(level_id, standard_id) values (48.113,48);       

insert into levels(id,description) values (48.114,'');
insert into games_levels (level_id,game_id) values  (48.114,6);
insert into levels_standards(level_id, standard_id) values (48.114,48);       

insert into levels(id,description) values (48.115,'');
insert into games_levels (level_id,game_id) values  (48.115,6);
insert into levels_standards(level_id, standard_id) values (48.115,48);       

insert into levels(id,description) values (48.116,'');
insert into games_levels (level_id,game_id) values  (48.116,6);
insert into levels_standards(level_id, standard_id) values (48.116,48);       

insert into levels(id,description) values (48.117,'');
insert into games_levels (level_id,game_id) values  (48.117,6);
insert into levels_standards(level_id, standard_id) values (48.117,48);       

insert into levels(id,description) values (48.118,'');
insert into games_levels (level_id,game_id) values  (48.118,6);
insert into levels_standards(level_id, standard_id) values (48.118,48);       

insert into levels(id,description) values (48.119,'');
insert into games_levels (level_id,game_id) values  (48.119,6);
insert into levels_standards(level_id, standard_id) values (48.119,48);   

insert into levels(id,description) values (48.120,'');
insert into games_levels (level_id,game_id) values  (48.120,6);
insert into levels_standards(level_id, standard_id) values (48.120,48);       

insert into levels(id,description) values (48.121,'');
insert into games_levels (level_id,game_id) values  (48.121,6);
insert into levels_standards(level_id, standard_id) values (48.121,48);       

insert into levels(id,description) values (48.122,'');
insert into games_levels (level_id,game_id) values  (48.122,6);
insert into levels_standards(level_id, standard_id) values (48.122,48);       

insert into levels(id,description) values (48.123,'');
insert into games_levels (level_id,game_id) values  (48.123,6);
insert into levels_standards(level_id, standard_id) values (48.123,48);       

insert into levels(id,description) values (48.124,'');
insert into games_levels (level_id,game_id) values  (48.124,6);
insert into levels_standards(level_id, standard_id) values (48.124,48);       

insert into levels(id,description) values (48.125,'');
insert into games_levels (level_id,game_id) values  (48.125,6);
insert into levels_standards(level_id, standard_id) values (48.125,48);       

insert into levels(id,description) values (48.126,'');
insert into games_levels (level_id,game_id) values  (48.126,6);
insert into levels_standards(level_id, standard_id) values (48.126,48);       

insert into levels(id,description) values (48.127,'');
insert into games_levels (level_id,game_id) values  (48.127,6);
insert into levels_standards(level_id, standard_id) values (48.127,48);       

insert into levels(id,description) values (48.128,'');
insert into games_levels (level_id,game_id) values  (48.128,6);
insert into levels_standards(level_id, standard_id) values (48.128,48);       

insert into levels(id,description) values (48.129,'');
insert into games_levels (level_id,game_id) values  (48.129,6);
insert into levels_standards(level_id, standard_id) values (48.129,48);    

insert into levels(id,description) values (48.130,'');
insert into games_levels (level_id,game_id) values  (48.130,6);
insert into levels_standards(level_id, standard_id) values (48.130,48);       

insert into levels(id,description) values (48.131,'');
insert into games_levels (level_id,game_id) values  (48.131,6);
insert into levels_standards(level_id, standard_id) values (48.131,48);       

insert into levels(id,description) values (48.132,'');
insert into games_levels (level_id,game_id) values  (48.132,6);
insert into levels_standards(level_id, standard_id) values (48.132,48);       

insert into levels(id,description) values (48.133,'');
insert into games_levels (level_id,game_id) values  (48.133,6);
insert into levels_standards(level_id, standard_id) values (48.133,48);       

insert into levels(id,description) values (48.134,'');
insert into games_levels (level_id,game_id) values  (48.134,6);
insert into levels_standards(level_id, standard_id) values (48.134,48);       

insert into levels(id,description) values (48.135,'');
insert into games_levels (level_id,game_id) values  (48.135,6);
insert into levels_standards(level_id, standard_id) values (48.135,48);       

insert into levels(id,description) values (48.136,'');
insert into games_levels (level_id,game_id) values  (48.136,6);
insert into levels_standards(level_id, standard_id) values (48.136,48);       

insert into levels(id,description) values (48.137,'');
insert into games_levels (level_id,game_id) values  (48.137,6);
insert into levels_standards(level_id, standard_id) values (48.137,48);       

insert into levels(id,description) values (48.138,'');
insert into games_levels (level_id,game_id) values  (48.138,6);
insert into levels_standards(level_id, standard_id) values (48.138,48);       

insert into levels(id,description) values (48.139,'');
insert into games_levels (level_id,game_id) values  (48.139,6);
insert into levels_standards(level_id, standard_id) values (48.139,48);    
 
insert into levels(id,description) values (48.140,'');
insert into games_levels (level_id,game_id) values  (48.140,6);
insert into levels_standards(level_id, standard_id) values (48.140,48);       

insert into levels(id,description) values (48.141,'');
insert into games_levels (level_id,game_id) values  (48.141,6);
insert into levels_standards(level_id, standard_id) values (48.141,48);       

insert into levels(id,description) values (48.142,'');
insert into games_levels (level_id,game_id) values  (48.142,6);
insert into levels_standards(level_id, standard_id) values (48.142,48);       

insert into levels(id,description) values (48.143,'');
insert into games_levels (level_id,game_id) values  (48.143,6);
insert into levels_standards(level_id, standard_id) values (48.143,48);       

insert into levels(id,description) values (48.144,'');
insert into games_levels (level_id,game_id) values  (48.144,6);
insert into levels_standards(level_id, standard_id) values (48.144,48);       

insert into levels(id,description) values (48.145,'');
insert into games_levels (level_id,game_id) values  (48.145,6);
insert into levels_standards(level_id, standard_id) values (48.145,48);       

insert into levels(id,description) values (48.146,'');
insert into games_levels (level_id,game_id) values  (48.146,6);
insert into levels_standards(level_id, standard_id) values (48.146,48);       

insert into levels(id,description) values (48.147,'');
insert into games_levels (level_id,game_id) values  (48.147,6);
insert into levels_standards(level_id, standard_id) values (48.147,48);       

insert into levels(id,description) values (48.148,'');
insert into games_levels (level_id,game_id) values  (48.148,6);
insert into levels_standards(level_id, standard_id) values (48.148,48);       

insert into levels(id,description) values (48.149,'');
insert into games_levels (level_id,game_id) values  (48.149,6);
insert into levels_standards(level_id, standard_id) values (48.149,48);       

insert into levels(id,description) values (48.150,'');
insert into games_levels (level_id,game_id) values  (48.150,6);
insert into levels_standards(level_id, standard_id) values (48.150,48);       

insert into levels(id,description) values (48.151,'');
insert into games_levels (level_id,game_id) values  (48.151,6);
insert into levels_standards(level_id, standard_id) values (48.151,48);       

insert into levels(id,description) values (48.152,'');
insert into games_levels (level_id,game_id) values  (48.152,6);
insert into levels_standards(level_id, standard_id) values (48.152,48);       

insert into levels(id,description) values (48.153,'');
insert into games_levels (level_id,game_id) values  (48.153,6);
insert into levels_standards(level_id, standard_id) values (48.153,48);       

insert into levels(id,description) values (48.154,'');
insert into games_levels (level_id,game_id) values  (48.154,6);
insert into levels_standards(level_id, standard_id) values (48.154,48);       

insert into levels(id,description) values (48.155,'');
insert into games_levels (level_id,game_id) values  (48.155,6);
insert into levels_standards(level_id, standard_id) values (48.155,48);       

insert into levels(id,description) values (48.156,'');
insert into games_levels (level_id,game_id) values  (48.156,6);
insert into levels_standards(level_id, standard_id) values (48.156,48);       

insert into levels(id,description) values (48.157,'');
insert into games_levels (level_id,game_id) values  (48.157,6);
insert into levels_standards(level_id, standard_id) values (48.157,48);       

insert into levels(id,description) values (48.158,'');
insert into games_levels (level_id,game_id) values  (48.158,6);
insert into levels_standards(level_id, standard_id) values (48.158,48);       

insert into levels(id,description) values (48.159,'');
insert into games_levels (level_id,game_id) values  (48.159,6);
insert into levels_standards(level_id, standard_id) values (48.159,48);    

insert into levels(id,description) values (48.160,'');
insert into games_levels (level_id,game_id) values  (48.160,6);
insert into levels_standards(level_id, standard_id) values (48.160,48);       

insert into levels(id,description) values (48.161,'');
insert into games_levels (level_id,game_id) values  (48.161,6);
insert into levels_standards(level_id, standard_id) values (48.161,48);       

insert into levels(id,description) values (48.162,'');
insert into games_levels (level_id,game_id) values  (48.162,6);
insert into levels_standards(level_id, standard_id) values (48.162,48);       

insert into levels(id,description) values (48.163,'');
insert into games_levels (level_id,game_id) values  (48.163,6);
insert into levels_standards(level_id, standard_id) values (48.163,48);       

insert into levels(id,description) values (48.164,'');
insert into games_levels (level_id,game_id) values  (48.164,6);
insert into levels_standards(level_id, standard_id) values (48.164,48);       

insert into levels(id,description) values (48.165,'');
insert into games_levels (level_id,game_id) values  (48.165,6);
insert into levels_standards(level_id, standard_id) values (48.165,48);       

insert into levels(id,description) values (48.166,'');
insert into games_levels (level_id,game_id) values  (48.166,6);
insert into levels_standards(level_id, standard_id) values (48.166,48);       

insert into levels(id,description) values (48.167,'');
insert into games_levels (level_id,game_id) values  (48.167,6);
insert into levels_standards(level_id, standard_id) values (48.167,48);       

insert into levels(id,description) values (48.168,'');
insert into games_levels (level_id,game_id) values  (48.168,6);
insert into levels_standards(level_id, standard_id) values (48.168,48);       

insert into levels(id,description) values (48.169,'');
insert into games_levels (level_id,game_id) values  (48.169,6);
insert into levels_standards(level_id, standard_id) values (48.169,48);    

insert into levels(id,description) values (48.170,'');
insert into games_levels (level_id,game_id) values  (48.170,6);
insert into levels_standards(level_id, standard_id) values (48.170,48);       

insert into levels(id,description) values (48.171,'');
insert into games_levels (level_id,game_id) values  (48.171,6);
insert into levels_standards(level_id, standard_id) values (48.171,48);       

insert into levels(id,description) values (48.172,'');
insert into games_levels (level_id,game_id) values  (48.172,6);
insert into levels_standards(level_id, standard_id) values (48.172,48);       

insert into levels(id,description) values (48.173,'');
insert into games_levels (level_id,game_id) values  (48.173,6);
insert into levels_standards(level_id, standard_id) values (48.173,48);       

insert into levels(id,description) values (48.174,'');
insert into games_levels (level_id,game_id) values  (48.174,6);
insert into levels_standards(level_id, standard_id) values (48.174,48);       

insert into levels(id,description) values (48.175,'');
insert into games_levels (level_id,game_id) values  (48.175,6);
insert into levels_standards(level_id, standard_id) values (48.175,48);       

insert into levels(id,description) values (48.176,'');
insert into games_levels (level_id,game_id) values  (48.176,6);
insert into levels_standards(level_id, standard_id) values (48.176,48);       

insert into levels(id,description) values (48.177,'');
insert into games_levels (level_id,game_id) values  (48.177,6);
insert into levels_standards(level_id, standard_id) values (48.177,48);       

insert into levels(id,description) values (48.178,'');
insert into games_levels (level_id,game_id) values  (48.178,6);
insert into levels_standards(level_id, standard_id) values (48.178,48);       

insert into levels(id,description) values (48.179,'');
insert into games_levels (level_id,game_id) values  (48.179,6);
insert into levels_standards(level_id, standard_id) values (48.179,48);    

insert into levels(id,description) values (48.180,'');
insert into games_levels (level_id,game_id) values  (48.180,6);
insert into levels_standards(level_id, standard_id) values (48.180,48);       

insert into levels(id,description) values (48.181,'');
insert into games_levels (level_id,game_id) values  (48.181,6);
insert into levels_standards(level_id, standard_id) values (48.181,48);       

insert into levels(id,description) values (48.182,'');
insert into games_levels (level_id,game_id) values  (48.182,6);
insert into levels_standards(level_id, standard_id) values (48.182,48);       

insert into levels(id,description) values (48.183,'');
insert into games_levels (level_id,game_id) values  (48.183,6);
insert into levels_standards(level_id, standard_id) values (48.183,48);       

insert into levels(id,description) values (48.184,'');
insert into games_levels (level_id,game_id) values  (48.184,6);
insert into levels_standards(level_id, standard_id) values (48.184,48);       

insert into levels(id,description) values (48.185,'');
insert into games_levels (level_id,game_id) values  (48.185,6);
insert into levels_standards(level_id, standard_id) values (48.185,48);       

insert into levels(id,description) values (48.186,'');
insert into games_levels (level_id,game_id) values  (48.186,6);
insert into levels_standards(level_id, standard_id) values (48.186,48);       

insert into levels(id,description) values (48.187,'');
insert into games_levels (level_id,game_id) values  (48.187,6);
insert into levels_standards(level_id, standard_id) values (48.187,48);       

insert into levels(id,description) values (48.188,'');
insert into games_levels (level_id,game_id) values  (48.188,6);
insert into levels_standards(level_id, standard_id) values (48.188,48);       

insert into levels(id,description) values (48.189,'');
insert into games_levels (level_id,game_id) values  (48.189,6);
insert into levels_standards(level_id, standard_id) values (48.189,48);    

insert into levels(id,description) values (48.190,'');
insert into games_levels (level_id,game_id) values  (48.190,6);
insert into levels_standards(level_id, standard_id) values (48.190,48);       

insert into levels(id,description) values (48.191,'');
insert into games_levels (level_id,game_id) values  (48.191,6);
insert into levels_standards(level_id, standard_id) values (48.191,48);       

insert into levels(id,description) values (48.192,'');
insert into games_levels (level_id,game_id) values  (48.192,6);
insert into levels_standards(level_id, standard_id) values (48.192,48);       

insert into levels(id,description) values (48.193,'');
insert into games_levels (level_id,game_id) values  (48.193,6);
insert into levels_standards(level_id, standard_id) values (48.193,48);       

insert into levels(id,description) values (48.194,'');
insert into games_levels (level_id,game_id) values  (48.194,6);
insert into levels_standards(level_id, standard_id) values (48.194,48);       

insert into levels(id,description) values (48.195,'');
insert into games_levels (level_id,game_id) values  (48.195,6);
insert into levels_standards(level_id, standard_id) values (48.195,48);       

insert into levels(id,description) values (48.196,'');
insert into games_levels (level_id,game_id) values  (48.196,6);
insert into levels_standards(level_id, standard_id) values (48.196,48);       

insert into levels(id,description) values (48.197,'');
insert into games_levels (level_id,game_id) values  (48.197,6);
insert into levels_standards(level_id, standard_id) values (48.197,48);       

insert into levels(id,description) values (48.198,'');
insert into games_levels (level_id,game_id) values  (48.198,6);
insert into levels_standards(level_id, standard_id) values (48.198,48);       

insert into levels(id,description) values (48.199,'');
insert into games_levels (level_id,game_id) values  (48.199,6);
insert into levels_standards(level_id, standard_id) values (48.199,48);    

insert into levels(id,description) values (48.200,'');
insert into games_levels (level_id,game_id) values  (48.200,6);
insert into levels_standards(level_id, standard_id) values (48.200,48);       

insert into levels(id,description) values (48.201,'');
insert into games_levels (level_id,game_id) values  (48.201,6);
insert into levels_standards(level_id, standard_id) values (48.201,48);       

insert into levels(id,description) values (48.202,'');
insert into games_levels (level_id,game_id) values  (48.202,6);
insert into levels_standards(level_id, standard_id) values (48.202,48);       

insert into levels(id,description) values (48.203,'');
insert into games_levels (level_id,game_id) values  (48.203,6);
insert into levels_standards(level_id, standard_id) values (48.203,48);       

insert into levels(id,description) values (48.204,'');
insert into games_levels (level_id,game_id) values  (48.204,6);
insert into levels_standards(level_id, standard_id) values (48.204,48);       

insert into levels(id,description) values (48.205,'');
insert into games_levels (level_id,game_id) values  (48.205,6);
insert into levels_standards(level_id, standard_id) values (48.205,48);       

insert into levels(id,description) values (48.206,'');
insert into games_levels (level_id,game_id) values  (48.206,6);
insert into levels_standards(level_id, standard_id) values (48.206,48);       

insert into levels(id,description) values (48.207,'');
insert into games_levels (level_id,game_id) values  (48.207,6);
insert into levels_standards(level_id, standard_id) values (48.207,48);       

insert into levels(id,description) values (48.208,'');
insert into games_levels (level_id,game_id) values  (48.208,6);
insert into levels_standards(level_id, standard_id) values (48.208,48);       

insert into levels(id,description) values (48.209,'');
insert into games_levels (level_id,game_id) values  (48.209,6);
insert into levels_standards(level_id, standard_id) values (48.209,48);    

insert into levels(id,description) values (48.210,'');
insert into games_levels (level_id,game_id) values  (48.210,6);
insert into levels_standards(level_id, standard_id) values (48.210,48);       

insert into levels(id,description) values (48.211,'');
insert into games_levels (level_id,game_id) values  (48.211,6);
insert into levels_standards(level_id, standard_id) values (48.211,48);       

insert into levels(id,description) values (48.212,'');
insert into games_levels (level_id,game_id) values  (48.212,6);
insert into levels_standards(level_id, standard_id) values (48.212,48);       

insert into levels(id,description) values (48.213,'');
insert into games_levels (level_id,game_id) values  (48.213,6);
insert into levels_standards(level_id, standard_id) values (48.213,48);       

insert into levels(id,description) values (48.214,'');
insert into games_levels (level_id,game_id) values  (48.214,6);
insert into levels_standards(level_id, standard_id) values (48.214,48);       

insert into levels(id,description) values (48.215,'');
insert into games_levels (level_id,game_id) values  (48.215,6);
insert into levels_standards(level_id, standard_id) values (48.215,48);       

insert into levels(id,description) values (48.216,'');
insert into games_levels (level_id,game_id) values  (48.216,6);
insert into levels_standards(level_id, standard_id) values (48.216,48);       

insert into levels(id,description) values (48.217,'');
insert into games_levels (level_id,game_id) values  (48.217,6);
insert into levels_standards(level_id, standard_id) values (48.217,48);       

insert into levels(id,description) values (48.218,'');
insert into games_levels (level_id,game_id) values  (48.218,6);
insert into levels_standards(level_id, standard_id) values (48.218,48);       

insert into levels(id,description) values (48.219,'');
insert into games_levels (level_id,game_id) values  (48.219,6);
insert into levels_standards(level_id, standard_id) values (48.219,48);   

insert into levels(id,description) values (48.220,'');
insert into games_levels (level_id,game_id) values  (48.220,6);
insert into levels_standards(level_id, standard_id) values (48.220,48);       

insert into levels(id,description) values (48.221,'');
insert into games_levels (level_id,game_id) values  (48.221,6);
insert into levels_standards(level_id, standard_id) values (48.221,48);       

insert into levels(id,description) values (48.222,'');
insert into games_levels (level_id,game_id) values  (48.222,6);
insert into levels_standards(level_id, standard_id) values (48.222,48);       

insert into levels(id,description) values (48.223,'');
insert into games_levels (level_id,game_id) values  (48.223,6);
insert into levels_standards(level_id, standard_id) values (48.223,48);       

insert into levels(id,description) values (48.224,'');
insert into games_levels (level_id,game_id) values  (48.224,6);
insert into levels_standards(level_id, standard_id) values (48.224,48);       

insert into levels(id,description) values (48.225,'');
insert into games_levels (level_id,game_id) values  (48.225,6);
insert into levels_standards(level_id, standard_id) values (48.225,48);       

insert into levels(id,description) values (48.226,'');
insert into games_levels (level_id,game_id) values  (48.226,6);
insert into levels_standards(level_id, standard_id) values (48.226,48);       

insert into levels(id,description) values (48.227,'');
insert into games_levels (level_id,game_id) values  (48.227,6);
insert into levels_standards(level_id, standard_id) values (48.227,48);       

insert into levels(id,description) values (48.228,'');
insert into games_levels (level_id,game_id) values  (48.228,6);
insert into levels_standards(level_id, standard_id) values (48.228,48);       

insert into levels(id,description) values (48.229,'');
insert into games_levels (level_id,game_id) values  (48.229,6);
insert into levels_standards(level_id, standard_id) values (48.229,48);    

insert into levels(id,description) values (48.230,'');
insert into games_levels (level_id,game_id) values  (48.230,6);
insert into levels_standards(level_id, standard_id) values (48.230,48);       

insert into levels(id,description) values (48.231,'');
insert into games_levels (level_id,game_id) values  (48.231,6);
insert into levels_standards(level_id, standard_id) values (48.231,48);       

insert into levels(id,description) values (48.232,'');
insert into games_levels (level_id,game_id) values  (48.232,6);
insert into levels_standards(level_id, standard_id) values (48.232,48);       

insert into levels(id,description) values (48.233,'');
insert into games_levels (level_id,game_id) values  (48.233,6);
insert into levels_standards(level_id, standard_id) values (48.233,48);       

insert into levels(id,description) values (48.234,'');
insert into games_levels (level_id,game_id) values  (48.234,6);
insert into levels_standards(level_id, standard_id) values (48.234,48);       

insert into levels(id,description) values (48.235,'');
insert into games_levels (level_id,game_id) values  (48.235,6);
insert into levels_standards(level_id, standard_id) values (48.235,48);       

insert into levels(id,description) values (48.236,'');
insert into games_levels (level_id,game_id) values  (48.236,6);
insert into levels_standards(level_id, standard_id) values (48.236,48);       

insert into levels(id,description) values (48.237,'');
insert into games_levels (level_id,game_id) values  (48.237,6);
insert into levels_standards(level_id, standard_id) values (48.237,48);       

insert into levels(id,description) values (48.238,'');
insert into games_levels (level_id,game_id) values  (48.238,6);
insert into levels_standards(level_id, standard_id) values (48.238,48);       

insert into levels(id,description) values (48.239,'');
insert into games_levels (level_id,game_id) values  (48.239,6);
insert into levels_standards(level_id, standard_id) values (48.239,48);    
 
insert into levels(id,description) values (48.240,'');
insert into games_levels (level_id,game_id) values  (48.240,6);
insert into levels_standards(level_id, standard_id) values (48.240,48);       

insert into levels(id,description) values (48.241,'');
insert into games_levels (level_id,game_id) values  (48.241,6);
insert into levels_standards(level_id, standard_id) values (48.241,48);       

insert into levels(id,description) values (48.242,'');
insert into games_levels (level_id,game_id) values  (48.242,6);
insert into levels_standards(level_id, standard_id) values (48.242,48);       

insert into levels(id,description) values (48.243,'');
insert into games_levels (level_id,game_id) values  (48.243,6);
insert into levels_standards(level_id, standard_id) values (48.243,48);       

insert into levels(id,description) values (48.244,'');
insert into games_levels (level_id,game_id) values  (48.244,6);
insert into levels_standards(level_id, standard_id) values (48.244,48);       

insert into levels(id,description) values (48.245,'');
insert into games_levels (level_id,game_id) values  (48.245,6);
insert into levels_standards(level_id, standard_id) values (48.245,48);       

insert into levels(id,description) values (48.246,'');
insert into games_levels (level_id,game_id) values  (48.246,6);
insert into levels_standards(level_id, standard_id) values (48.246,48);       

insert into levels(id,description) values (48.247,'');
insert into games_levels (level_id,game_id) values  (48.247,6);
insert into levels_standards(level_id, standard_id) values (48.247,48);       

insert into levels(id,description) values (48.248,'');
insert into games_levels (level_id,game_id) values  (48.248,6);
insert into levels_standards(level_id, standard_id) values (48.248,48);       

insert into levels(id,description) values (48.249,'');
insert into games_levels (level_id,game_id) values  (48.249,6);
insert into levels_standards(level_id, standard_id) values (48.249,48);       

insert into levels(id,description) values (48.250,'');
insert into games_levels (level_id,game_id) values  (48.250,6);
insert into levels_standards(level_id, standard_id) values (48.250,48);       

insert into levels(id,description) values (48.251,'');
insert into games_levels (level_id,game_id) values  (48.251,6);
insert into levels_standards(level_id, standard_id) values (48.251,48);       

insert into levels(id,description) values (48.252,'');
insert into games_levels (level_id,game_id) values  (48.252,6);
insert into levels_standards(level_id, standard_id) values (48.252,48);       

insert into levels(id,description) values (48.253,'');
insert into games_levels (level_id,game_id) values  (48.253,6);
insert into levels_standards(level_id, standard_id) values (48.253,48);       

insert into levels(id,description) values (48.254,'');
insert into games_levels (level_id,game_id) values  (48.254,6);
insert into levels_standards(level_id, standard_id) values (48.254,48);       

insert into levels(id,description) values (48.255,'');
insert into games_levels (level_id,game_id) values  (48.255,6);
insert into levels_standards(level_id, standard_id) values (48.255,48);       

insert into levels(id,description) values (48.256,'');
insert into games_levels (level_id,game_id) values  (48.256,6);
insert into levels_standards(level_id, standard_id) values (48.256,48);       

insert into levels(id,description) values (48.257,'');
insert into games_levels (level_id,game_id) values  (48.257,6);
insert into levels_standards(level_id, standard_id) values (48.257,48);       

insert into levels(id,description) values (48.258,'');
insert into games_levels (level_id,game_id) values  (48.258,6);
insert into levels_standards(level_id, standard_id) values (48.258,48);       

insert into levels(id,description) values (48.259,'');
insert into games_levels (level_id,game_id) values  (48.259,6);
insert into levels_standards(level_id, standard_id) values (48.259,48);    

insert into levels(id,description) values (48.260,'');
insert into games_levels (level_id,game_id) values  (48.260,6);
insert into levels_standards(level_id, standard_id) values (48.260,48);       

insert into levels(id,description) values (48.261,'');
insert into games_levels (level_id,game_id) values  (48.261,6);
insert into levels_standards(level_id, standard_id) values (48.261,48);       

insert into levels(id,description) values (48.262,'');
insert into games_levels (level_id,game_id) values  (48.262,6);
insert into levels_standards(level_id, standard_id) values (48.262,48);       

insert into levels(id,description) values (48.263,'');
insert into games_levels (level_id,game_id) values  (48.263,6);
insert into levels_standards(level_id, standard_id) values (48.263,48);       

insert into levels(id,description) values (48.264,'');
insert into games_levels (level_id,game_id) values  (48.264,6);
insert into levels_standards(level_id, standard_id) values (48.264,48);       

insert into levels(id,description) values (48.265,'');
insert into games_levels (level_id,game_id) values  (48.265,6);
insert into levels_standards(level_id, standard_id) values (48.265,48);       

insert into levels(id,description) values (48.266,'');
insert into games_levels (level_id,game_id) values  (48.266,6);
insert into levels_standards(level_id, standard_id) values (48.266,48);       

insert into levels(id,description) values (48.267,'');
insert into games_levels (level_id,game_id) values  (48.267,6);
insert into levels_standards(level_id, standard_id) values (48.267,48);       

insert into levels(id,description) values (48.268,'');
insert into games_levels (level_id,game_id) values  (48.268,6);
insert into levels_standards(level_id, standard_id) values (48.268,48);       

insert into levels(id,description) values (48.269,'');
insert into games_levels (level_id,game_id) values  (48.269,6);
insert into levels_standards(level_id, standard_id) values (48.269,48);    

insert into levels(id,description) values (48.270,'');
insert into games_levels (level_id,game_id) values  (48.270,6);
insert into levels_standards(level_id, standard_id) values (48.270,48);       

insert into levels(id,description) values (48.271,'');
insert into games_levels (level_id,game_id) values  (48.271,6);
insert into levels_standards(level_id, standard_id) values (48.271,48);       

insert into levels(id,description) values (48.272,'');
insert into games_levels (level_id,game_id) values  (48.272,6);
insert into levels_standards(level_id, standard_id) values (48.272,48);       

insert into levels(id,description) values (48.273,'');
insert into games_levels (level_id,game_id) values  (48.273,6);
insert into levels_standards(level_id, standard_id) values (48.273,48);       

insert into levels(id,description) values (48.274,'');
insert into games_levels (level_id,game_id) values  (48.274,6);
insert into levels_standards(level_id, standard_id) values (48.274,48);       

insert into levels(id,description) values (48.275,'');
insert into games_levels (level_id,game_id) values  (48.275,6);
insert into levels_standards(level_id, standard_id) values (48.275,48);       

insert into levels(id,description) values (48.276,'');
insert into games_levels (level_id,game_id) values  (48.276,6);
insert into levels_standards(level_id, standard_id) values (48.276,48);       

insert into levels(id,description) values (48.277,'');
insert into games_levels (level_id,game_id) values  (48.277,6);
insert into levels_standards(level_id, standard_id) values (48.277,48);       

insert into levels(id,description) values (48.278,'');
insert into games_levels (level_id,game_id) values  (48.278,6);
insert into levels_standards(level_id, standard_id) values (48.278,48);       

insert into levels(id,description) values (48.279,'');
insert into games_levels (level_id,game_id) values  (48.279,6);
insert into levels_standards(level_id, standard_id) values (48.279,48);    

insert into levels(id,description) values (48.280,'');
insert into games_levels (level_id,game_id) values  (48.280,6);
insert into levels_standards(level_id, standard_id) values (48.280,48);       

insert into levels(id,description) values (48.281,'');
insert into games_levels (level_id,game_id) values  (48.281,6);
insert into levels_standards(level_id, standard_id) values (48.281,48);       

insert into levels(id,description) values (48.282,'');
insert into games_levels (level_id,game_id) values  (48.282,6);
insert into levels_standards(level_id, standard_id) values (48.282,48);       

insert into levels(id,description) values (48.283,'');
insert into games_levels (level_id,game_id) values  (48.283,6);
insert into levels_standards(level_id, standard_id) values (48.283,48);       

insert into levels(id,description) values (48.284,'');
insert into games_levels (level_id,game_id) values  (48.284,6);
insert into levels_standards(level_id, standard_id) values (48.284,48);       

insert into levels(id,description) values (48.285,'');
insert into games_levels (level_id,game_id) values  (48.285,6);
insert into levels_standards(level_id, standard_id) values (48.285,48);       

insert into levels(id,description) values (48.286,'');
insert into games_levels (level_id,game_id) values  (48.286,6);
insert into levels_standards(level_id, standard_id) values (48.286,48);       

insert into levels(id,description) values (48.287,'');
insert into games_levels (level_id,game_id) values  (48.287,6);
insert into levels_standards(level_id, standard_id) values (48.287,48);       

insert into levels(id,description) values (48.288,'');
insert into games_levels (level_id,game_id) values  (48.288,6);
insert into levels_standards(level_id, standard_id) values (48.288,48);       

insert into levels(id,description) values (48.289,'');
insert into games_levels (level_id,game_id) values  (48.289,6);
insert into levels_standards(level_id, standard_id) values (48.289,48);    

insert into levels(id,description) values (48.290,'');
insert into games_levels (level_id,game_id) values  (48.290,6);
insert into levels_standards(level_id, standard_id) values (48.290,48);       

insert into levels(id,description) values (48.291,'');
insert into games_levels (level_id,game_id) values  (48.291,6);
insert into levels_standards(level_id, standard_id) values (48.291,48);       

insert into levels(id,description) values (48.292,'');
insert into games_levels (level_id,game_id) values  (48.292,6);
insert into levels_standards(level_id, standard_id) values (48.292,48);       

insert into levels(id,description) values (48.293,'');
insert into games_levels (level_id,game_id) values  (48.293,6);
insert into levels_standards(level_id, standard_id) values (48.293,48);       

insert into levels(id,description) values (48.294,'');
insert into games_levels (level_id,game_id) values  (48.294,6);
insert into levels_standards(level_id, standard_id) values (48.294,48);       

insert into levels(id,description) values (48.295,'');
insert into games_levels (level_id,game_id) values  (48.295,6);
insert into levels_standards(level_id, standard_id) values (48.295,48);       

insert into levels(id,description) values (48.296,'');
insert into games_levels (level_id,game_id) values  (48.296,6);
insert into levels_standards(level_id, standard_id) values (48.296,48);       

insert into levels(id,description) values (48.297,'');
insert into games_levels (level_id,game_id) values  (48.297,6);
insert into levels_standards(level_id, standard_id) values (48.297,48);       

insert into levels(id,description) values (48.298,'');
insert into games_levels (level_id,game_id) values  (48.298,6);
insert into levels_standards(level_id, standard_id) values (48.298,48);       

insert into levels(id,description) values (48.299,'');
insert into games_levels (level_id,game_id) values  (48.299,6);
insert into levels_standards(level_id, standard_id) values (48.299,48);  

insert into levels(id,description) values (48.300,'');
insert into games_levels (level_id,game_id) values  (48.300,6);
insert into levels_standards(level_id, standard_id) values (48.300,48);  

insert into levels(id,description) values (48.301,'');
insert into games_levels (level_id,game_id) values  (48.301,6);
insert into levels_standards(level_id, standard_id) values (48.301,48);  

insert into levels(id,description) values (48.302,'');
insert into games_levels (level_id,game_id) values  (48.302,6);
insert into levels_standards(level_id, standard_id) values (48.302,48);  

insert into levels(id,description) values (48.303,'');
insert into games_levels (level_id,game_id) values  (48.303,6);
insert into levels_standards(level_id, standard_id) values (48.303,48);  

		--LevelID:81, GameID:7, StandardID:81 Standard:3.OA.C.7
insert into levels(id,description) values (81,'');
insert into games_levels (level_id,game_id) values  (81,7);
insert into levels_standards(level_id, standard_id) values (81,81);       

insert into levels(id,description) values (81.001,'');
insert into games_levels (level_id,game_id) values  (81.001,7);
insert into levels_standards(level_id, standard_id) values (81.001,81);       

insert into levels(id,description) values (81.002,'');
insert into games_levels (level_id,game_id) values  (81.002,7);
insert into levels_standards(level_id, standard_id) values (81.002,81);       

insert into levels(id,description) values (81.003,'');
insert into games_levels (level_id,game_id) values  (81.003,7);
insert into levels_standards(level_id, standard_id) values (81.003,81);       

insert into levels(id,description) values (81.004,'');
insert into games_levels (level_id,game_id) values  (81.004,7);
insert into levels_standards(level_id, standard_id) values (81.004,81);       

insert into levels(id,description) values (81.005,'');
insert into games_levels (level_id,game_id) values  (81.005,7);
insert into levels_standards(level_id, standard_id) values (81.005,81);       

insert into levels(id,description) values (81.006,'');
insert into games_levels (level_id,game_id) values  (81.006,7);
insert into levels_standards(level_id, standard_id) values (81.006,81);       

insert into levels(id,description) values (81.007,'');
insert into games_levels (level_id,game_id) values  (81.007,7);
insert into levels_standards(level_id, standard_id) values (81.007,81);       

insert into levels(id,description) values (81.008,'');
insert into games_levels (level_id,game_id) values  (81.008,7);
insert into levels_standards(level_id, standard_id) values (81.008,81);       

insert into levels(id,description) values (81.009,'');
insert into games_levels (level_id,game_id) values  (81.009,7);
insert into levels_standards(level_id, standard_id) values (81.009,81);       

insert into levels(id,description) values (81.010,'');
insert into games_levels (level_id,game_id) values  (81.010,7);
insert into levels_standards(level_id, standard_id) values (81.010,81);       

insert into levels(id,description) values (81.011,'');
insert into games_levels (level_id,game_id) values  (81.011,7);
insert into levels_standards(level_id, standard_id) values (81.011,81);       

insert into levels(id,description) values (81.012,'');
insert into games_levels (level_id,game_id) values  (81.012,7);
insert into levels_standards(level_id, standard_id) values (81.012,81);       

insert into levels(id,description) values (81.013,'');
insert into games_levels (level_id,game_id) values  (81.013,7);
insert into levels_standards(level_id, standard_id) values (81.013,81);       

insert into levels(id,description) values (81.014,'');
insert into games_levels (level_id,game_id) values  (81.014,7);
insert into levels_standards(level_id, standard_id) values (81.014,81);       

insert into levels(id,description) values (81.015,'');
insert into games_levels (level_id,game_id) values  (81.015,7);
insert into levels_standards(level_id, standard_id) values (81.015,81);       


insert into levels(id,description) values (81.016,'');
insert into games_levels (level_id,game_id) values  (81.016,7);
insert into levels_standards(level_id, standard_id) values (81.016,81);       

insert into levels(id,description) values (81.017,'');
insert into games_levels (level_id,game_id) values  (81.017,7);
insert into levels_standards(level_id, standard_id) values (81.017,81);       

insert into levels(id,description) values (81.018,'');
insert into games_levels (level_id,game_id) values  (81.018,7);
insert into levels_standards(level_id, standard_id) values (81.018,81);       

insert into levels(id,description) values (81.019,'');
insert into games_levels (level_id,game_id) values  (81.019,7);
insert into levels_standards(level_id, standard_id) values (81.019,81);       

insert into levels(id,description) values (81.020,'');
insert into games_levels (level_id,game_id) values  (81.020,7);
insert into levels_standards(level_id, standard_id) values (81.020,81);       

insert into levels(id,description) values (81.021,'');
insert into games_levels (level_id,game_id) values  (81.021,7);
insert into levels_standards(level_id, standard_id) values (81.021,81);       

insert into levels(id,description) values (81.022,'');
insert into games_levels (level_id,game_id) values  (81.022,7);
insert into levels_standards(level_id, standard_id) values (81.022,81);       

insert into levels(id,description) values (81.023,'');
insert into games_levels (level_id,game_id) values  (81.023,7);
insert into levels_standards(level_id, standard_id) values (81.023,81);       

insert into levels(id,description) values (81.024,'');
insert into games_levels (level_id,game_id) values  (81.024,7);
insert into levels_standards(level_id, standard_id) values (81.024,81);       

insert into levels(id,description) values (81.025,'');
insert into games_levels (level_id,game_id) values  (81.025,7);
insert into levels_standards(level_id, standard_id) values (81.025,81);       

insert into levels(id,description) values (81.026,'');
insert into games_levels (level_id,game_id) values  (81.026,7);
insert into levels_standards(level_id, standard_id) values (81.026,81);       

insert into levels(id,description) values (81.027,'');
insert into games_levels (level_id,game_id) values  (81.027,7);
insert into levels_standards(level_id, standard_id) values (81.027,81);       

insert into levels(id,description) values (81.028,'');
insert into games_levels (level_id,game_id) values  (81.028,7);
insert into levels_standards(level_id, standard_id) values (81.028,81);       

insert into levels(id,description) values (81.029,'');
insert into games_levels (level_id,game_id) values  (81.029,7);
insert into levels_standards(level_id, standard_id) values (81.029,81);       

insert into levels(id,description) values (81.030,'');
insert into games_levels (level_id,game_id) values  (81.030,7);
insert into levels_standards(level_id, standard_id) values (81.030,81);       

insert into levels(id,description) values (81.031,'');
insert into games_levels (level_id,game_id) values  (81.031,7);
insert into levels_standards(level_id, standard_id) values (81.031,81);       

insert into levels(id,description) values (81.032,'');
insert into games_levels (level_id,game_id) values  (81.032,7);
insert into levels_standards(level_id, standard_id) values (81.032,81);       

insert into levels(id,description) values (81.033,'');
insert into games_levels (level_id,game_id) values  (81.033,7);
insert into levels_standards(level_id, standard_id) values (81.033,81);       

insert into levels(id,description) values (81.034,'');
insert into games_levels (level_id,game_id) values  (81.034,7);
insert into levels_standards(level_id, standard_id) values (81.034,81);       

insert into levels(id,description) values (81.035,'');
insert into games_levels (level_id,game_id) values  (81.035,7);
insert into levels_standards(level_id, standard_id) values (81.035,81);       

insert into levels(id,description) values (81.036,'');
insert into games_levels (level_id,game_id) values  (81.036,7);
insert into levels_standards(level_id, standard_id) values (81.036,81);       

insert into levels(id,description) values (81.037,'');
insert into games_levels (level_id,game_id) values  (81.037,7);
insert into levels_standards(level_id, standard_id) values (81.037,81);       

insert into levels(id,description) values (81.038,'');
insert into games_levels (level_id,game_id) values  (81.038,7);
insert into levels_standards(level_id, standard_id) values (81.038,81);       

insert into levels(id,description) values (81.039,'');
insert into games_levels (level_id,game_id) values  (81.039,7);
insert into levels_standards(level_id, standard_id) values (81.039,81);       

insert into levels(id,description) values (81.040,'');
insert into games_levels (level_id,game_id) values  (81.040,7);
insert into levels_standards(level_id, standard_id) values (81.040,81);       

insert into levels(id,description) values (81.041,'');
insert into games_levels (level_id,game_id) values  (81.041,7);
insert into levels_standards(level_id, standard_id) values (81.041,81);       

insert into levels(id,description) values (81.042,'');
insert into games_levels (level_id,game_id) values  (81.042,7);
insert into levels_standards(level_id, standard_id) values (81.042,81);       

insert into levels(id,description) values (81.043,'');
insert into games_levels (level_id,game_id) values  (81.043,7);
insert into levels_standards(level_id, standard_id) values (81.043,81);       

insert into levels(id,description) values (81.044,'');
insert into games_levels (level_id,game_id) values  (81.044,7);
insert into levels_standards(level_id, standard_id) values (81.044,81);       

insert into levels(id,description) values (81.045,'');
insert into games_levels (level_id,game_id) values  (81.045,7);
insert into levels_standards(level_id, standard_id) values (81.045,81);       

insert into levels(id,description) values (81.046,'');
insert into games_levels (level_id,game_id) values  (81.046,7);
insert into levels_standards(level_id, standard_id) values (81.046,81);       

insert into levels(id,description) values (81.047,'');
insert into games_levels (level_id,game_id) values  (81.047,7);
insert into levels_standards(level_id, standard_id) values (81.047,81);       

insert into levels(id,description) values (81.048,'');
insert into games_levels (level_id,game_id) values  (81.048,7);
insert into levels_standards(level_id, standard_id) values (81.048,81);       

insert into levels(id,description) values (81.049,'');
insert into games_levels (level_id,game_id) values  (81.049,7);
insert into levels_standards(level_id, standard_id) values (81.049,81);       

insert into levels(id,description) values (81.050,'');
insert into games_levels (level_id,game_id) values  (81.050,7);
insert into levels_standards(level_id, standard_id) values (81.050,81);       

insert into levels(id,description) values (81.051,'');
insert into games_levels (level_id,game_id) values  (81.051,7);
insert into levels_standards(level_id, standard_id) values (81.051,81);       

insert into levels(id,description) values (81.052,'');
insert into games_levels (level_id,game_id) values  (81.052,7);
insert into levels_standards(level_id, standard_id) values (81.052,81);       

insert into levels(id,description) values (81.053,'');
insert into games_levels (level_id,game_id) values  (81.053,7);
insert into levels_standards(level_id, standard_id) values (81.053,81);       

insert into levels(id,description) values (81.054,'');
insert into games_levels (level_id,game_id) values  (81.054,7);
insert into levels_standards(level_id, standard_id) values (81.054,81);       

insert into levels(id,description) values (81.055,'');
insert into games_levels (level_id,game_id) values  (81.055,7);
insert into levels_standards(level_id, standard_id) values (81.055,81);       

insert into levels(id,description) values (81.056,'');
insert into games_levels (level_id,game_id) values  (81.056,7);
insert into levels_standards(level_id, standard_id) values (81.056,81);       

insert into levels(id,description) values (81.057,'');
insert into games_levels (level_id,game_id) values  (81.057,7);
insert into levels_standards(level_id, standard_id) values (81.057,81);       

insert into levels(id,description) values (81.058,'');
insert into games_levels (level_id,game_id) values  (81.058,7);
insert into levels_standards(level_id, standard_id) values (81.058,81);       

insert into levels(id,description) values (81.059,'');
insert into games_levels (level_id,game_id) values  (81.059,7);
insert into levels_standards(level_id, standard_id) values (81.059,81);    

insert into levels(id,description) values (81.060,'');
insert into games_levels (level_id,game_id) values  (81.060,7);
insert into levels_standards(level_id, standard_id) values (81.060,81);       

insert into levels(id,description) values (81.061,'');
insert into games_levels (level_id,game_id) values  (81.061,7);
insert into levels_standards(level_id, standard_id) values (81.061,81);       

insert into levels(id,description) values (81.062,'');
insert into games_levels (level_id,game_id) values  (81.062,7);
insert into levels_standards(level_id, standard_id) values (81.062,81);       

insert into levels(id,description) values (81.063,'');
insert into games_levels (level_id,game_id) values  (81.063,7);
insert into levels_standards(level_id, standard_id) values (81.063,81);       

insert into levels(id,description) values (81.064,'');
insert into games_levels (level_id,game_id) values  (81.064,7);
insert into levels_standards(level_id, standard_id) values (81.064,81);       

insert into levels(id,description) values (81.065,'');
insert into games_levels (level_id,game_id) values  (81.065,7);
insert into levels_standards(level_id, standard_id) values (81.065,81);       

insert into levels(id,description) values (81.066,'');
insert into games_levels (level_id,game_id) values  (81.066,7);
insert into levels_standards(level_id, standard_id) values (81.066,81);       

insert into levels(id,description) values (81.067,'');
insert into games_levels (level_id,game_id) values  (81.067,7);
insert into levels_standards(level_id, standard_id) values (81.067,81);       

insert into levels(id,description) values (81.068,'');
insert into games_levels (level_id,game_id) values  (81.068,7);
insert into levels_standards(level_id, standard_id) values (81.068,81);       

insert into levels(id,description) values (81.069,'');
insert into games_levels (level_id,game_id) values  (81.069,7);
insert into levels_standards(level_id, standard_id) values (81.069,81);    

insert into levels(id,description) values (81.070,'');
insert into games_levels (level_id,game_id) values  (81.070,7);
insert into levels_standards(level_id, standard_id) values (81.070,81);       

insert into levels(id,description) values (81.071,'');
insert into games_levels (level_id,game_id) values  (81.071,7);
insert into levels_standards(level_id, standard_id) values (81.071,81);       

insert into levels(id,description) values (81.072,'');
insert into games_levels (level_id,game_id) values  (81.072,7);
insert into levels_standards(level_id, standard_id) values (81.072,81);       

insert into levels(id,description) values (81.073,'');
insert into games_levels (level_id,game_id) values  (81.073,7);
insert into levels_standards(level_id, standard_id) values (81.073,81);       

insert into levels(id,description) values (81.074,'');
insert into games_levels (level_id,game_id) values  (81.074,7);
insert into levels_standards(level_id, standard_id) values (81.074,81);       

insert into levels(id,description) values (81.075,'');
insert into games_levels (level_id,game_id) values  (81.075,7);
insert into levels_standards(level_id, standard_id) values (81.075,81);       

insert into levels(id,description) values (81.076,'');
insert into games_levels (level_id,game_id) values  (81.076,7);
insert into levels_standards(level_id, standard_id) values (81.076,81);       

insert into levels(id,description) values (81.077,'');
insert into games_levels (level_id,game_id) values  (81.077,7);
insert into levels_standards(level_id, standard_id) values (81.077,81);       

insert into levels(id,description) values (81.078,'');
insert into games_levels (level_id,game_id) values  (81.078,7);
insert into levels_standards(level_id, standard_id) values (81.078,81);       

insert into levels(id,description) values (81.079,'');
insert into games_levels (level_id,game_id) values  (81.079,7);
insert into levels_standards(level_id, standard_id) values (81.079,81);    

insert into levels(id,description) values (81.080,'');
insert into games_levels (level_id,game_id) values  (81.080,7);
insert into levels_standards(level_id, standard_id) values (81.080,81);       

insert into levels(id,description) values (81.081,'');
insert into games_levels (level_id,game_id) values  (81.081,7);
insert into levels_standards(level_id, standard_id) values (81.081,81);       

insert into levels(id,description) values (81.082,'');
insert into games_levels (level_id,game_id) values  (81.082,7);
insert into levels_standards(level_id, standard_id) values (81.082,81);       

insert into levels(id,description) values (81.083,'');
insert into games_levels (level_id,game_id) values  (81.083,7);
insert into levels_standards(level_id, standard_id) values (81.083,81);       

insert into levels(id,description) values (81.084,'');
insert into games_levels (level_id,game_id) values  (81.084,7);
insert into levels_standards(level_id, standard_id) values (81.084,81);       

insert into levels(id,description) values (81.085,'');
insert into games_levels (level_id,game_id) values  (81.085,7);
insert into levels_standards(level_id, standard_id) values (81.085,81);       

insert into levels(id,description) values (81.086,'');
insert into games_levels (level_id,game_id) values  (81.086,7);
insert into levels_standards(level_id, standard_id) values (81.086,81);       

insert into levels(id,description) values (81.087,'');
insert into games_levels (level_id,game_id) values  (81.087,7);
insert into levels_standards(level_id, standard_id) values (81.087,81);       

insert into levels(id,description) values (81.088,'');
insert into games_levels (level_id,game_id) values  (81.088,7);
insert into levels_standards(level_id, standard_id) values (81.088,81);       

insert into levels(id,description) values (81.089,'');
insert into games_levels (level_id,game_id) values  (81.089,7);
insert into levels_standards(level_id, standard_id) values (81.089,81);    

insert into levels(id,description) values (81.090,'');
insert into games_levels (level_id,game_id) values  (81.090,7);
insert into levels_standards(level_id, standard_id) values (81.090,81);       

insert into levels(id,description) values (81.091,'');
insert into games_levels (level_id,game_id) values  (81.091,7);
insert into levels_standards(level_id, standard_id) values (81.091,81);       

insert into levels(id,description) values (81.092,'');
insert into games_levels (level_id,game_id) values  (81.092,7);
insert into levels_standards(level_id, standard_id) values (81.092,81);       

insert into levels(id,description) values (81.093,'');
insert into games_levels (level_id,game_id) values  (81.093,7);
insert into levels_standards(level_id, standard_id) values (81.093,81);       

insert into levels(id,description) values (81.094,'');
insert into games_levels (level_id,game_id) values  (81.094,7);
insert into levels_standards(level_id, standard_id) values (81.094,81);       

insert into levels(id,description) values (81.095,'');
insert into games_levels (level_id,game_id) values  (81.095,7);
insert into levels_standards(level_id, standard_id) values (81.095,81);       

insert into levels(id,description) values (81.096,'');
insert into games_levels (level_id,game_id) values  (81.096,7);
insert into levels_standards(level_id, standard_id) values (81.096,81);       

insert into levels(id,description) values (81.097,'');
insert into games_levels (level_id,game_id) values  (81.097,7);
insert into levels_standards(level_id, standard_id) values (81.097,81);       

insert into levels(id,description) values (81.098,'');
insert into games_levels (level_id,game_id) values  (81.098,7);
insert into levels_standards(level_id, standard_id) values (81.098,81);       

insert into levels(id,description) values (81.099,'');
insert into games_levels (level_id,game_id) values  (81.099,7);
insert into levels_standards(level_id, standard_id) values (81.099,81);    

insert into levels(id,description) values (81.100,'');
insert into games_levels (level_id,game_id) values  (81.100,7);
insert into levels_standards(level_id, standard_id) values (81.100,81);       

insert into levels(id,description) values (81.101,'');
insert into games_levels (level_id,game_id) values  (81.101,7);
insert into levels_standards(level_id, standard_id) values (81.101,81);       

insert into levels(id,description) values (81.102,'');
insert into games_levels (level_id,game_id) values  (81.102,7);
insert into levels_standards(level_id, standard_id) values (81.102,81);       

insert into levels(id,description) values (81.103,'');
insert into games_levels (level_id,game_id) values  (81.103,7);
insert into levels_standards(level_id, standard_id) values (81.103,81);       

insert into levels(id,description) values (81.104,'');
insert into games_levels (level_id,game_id) values  (81.104,7);
insert into levels_standards(level_id, standard_id) values (81.104,81);       

insert into levels(id,description) values (81.105,'');
insert into games_levels (level_id,game_id) values  (81.105,7);
insert into levels_standards(level_id, standard_id) values (81.105,81);       

insert into levels(id,description) values (81.106,'');
insert into games_levels (level_id,game_id) values  (81.106,7);
insert into levels_standards(level_id, standard_id) values (81.106,81);       

insert into levels(id,description) values (81.107,'');
insert into games_levels (level_id,game_id) values  (81.107,7);
insert into levels_standards(level_id, standard_id) values (81.107,81);       

insert into levels(id,description) values (81.108,'');
insert into games_levels (level_id,game_id) values  (81.108,7);
insert into levels_standards(level_id, standard_id) values (81.108,81);       

insert into levels(id,description) values (81.109,'');
insert into games_levels (level_id,game_id) values  (81.109,7);
insert into levels_standards(level_id, standard_id) values (81.109,81);       

insert into levels(id,description) values (81.110,'');
insert into games_levels (level_id,game_id) values  (81.110,7);
insert into levels_standards(level_id, standard_id) values (81.110,81);       

insert into levels(id,description) values (81.111,'');
insert into games_levels (level_id,game_id) values  (81.111,7);
insert into levels_standards(level_id, standard_id) values (81.111,81);       

insert into levels(id,description) values (81.112,'');
insert into games_levels (level_id,game_id) values  (81.112,7);
insert into levels_standards(level_id, standard_id) values (81.112,81);       

insert into levels(id,description) values (81.113,'');
insert into games_levels (level_id,game_id) values  (81.113,7);
insert into levels_standards(level_id, standard_id) values (81.113,81);       

insert into levels(id,description) values (81.114,'');
insert into games_levels (level_id,game_id) values  (81.114,7);
insert into levels_standards(level_id, standard_id) values (81.114,81);       

insert into levels(id,description) values (81.115,'');
insert into games_levels (level_id,game_id) values  (81.115,7);
insert into levels_standards(level_id, standard_id) values (81.115,81);       


insert into levels(id,description) values (81.116,'');
insert into games_levels (level_id,game_id) values  (81.116,7);
insert into levels_standards(level_id, standard_id) values (81.116,81);       

insert into levels(id,description) values (81.117,'');
insert into games_levels (level_id,game_id) values  (81.117,7);
insert into levels_standards(level_id, standard_id) values (81.117,81);       

insert into levels(id,description) values (81.118,'');
insert into games_levels (level_id,game_id) values  (81.118,7);
insert into levels_standards(level_id, standard_id) values (81.118,81);       

insert into levels(id,description) values (81.119,'');
insert into games_levels (level_id,game_id) values  (81.119,7);
insert into levels_standards(level_id, standard_id) values (81.119,81);       

insert into levels(id,description) values (81.120,'');
insert into games_levels (level_id,game_id) values  (81.120,7);
insert into levels_standards(level_id, standard_id) values (81.120,81);       

insert into levels(id,description) values (81.121,'');
insert into games_levels (level_id,game_id) values  (81.121,7);
insert into levels_standards(level_id, standard_id) values (81.121,81);       

insert into levels(id,description) values (81.122,'');
insert into games_levels (level_id,game_id) values  (81.122,7);
insert into levels_standards(level_id, standard_id) values (81.122,81);       

insert into levels(id,description) values (81.123,'');
insert into games_levels (level_id,game_id) values  (81.123,7);
insert into levels_standards(level_id, standard_id) values (81.123,81);       

insert into levels(id,description) values (81.124,'');
insert into games_levels (level_id,game_id) values  (81.124,7);
insert into levels_standards(level_id, standard_id) values (81.124,81);       

insert into levels(id,description) values (81.125,'');
insert into games_levels (level_id,game_id) values  (81.125,7);
insert into levels_standards(level_id, standard_id) values (81.125,81);       

insert into levels(id,description) values (81.126,'');
insert into games_levels (level_id,game_id) values  (81.126,7);
insert into levels_standards(level_id, standard_id) values (81.126,81);       

insert into levels(id,description) values (81.127,'');
insert into games_levels (level_id,game_id) values  (81.127,7);
insert into levels_standards(level_id, standard_id) values (81.127,81);       

insert into levels(id,description) values (81.128,'');
insert into games_levels (level_id,game_id) values  (81.128,7);
insert into levels_standards(level_id, standard_id) values (81.128,81);       

insert into levels(id,description) values (81.129,'');
insert into games_levels (level_id,game_id) values  (81.129,7);
insert into levels_standards(level_id, standard_id) values (81.129,81);       

insert into levels(id,description) values (81.130,'');
insert into games_levels (level_id,game_id) values  (81.130,7);
insert into levels_standards(level_id, standard_id) values (81.130,81);       

insert into levels(id,description) values (81.131,'');
insert into games_levels (level_id,game_id) values  (81.131,7);
insert into levels_standards(level_id, standard_id) values (81.131,81);       

insert into levels(id,description) values (81.132,'');
insert into games_levels (level_id,game_id) values  (81.132,7);
insert into levels_standards(level_id, standard_id) values (81.132,81);       

insert into levels(id,description) values (81.133,'');
insert into games_levels (level_id,game_id) values  (81.133,7);
insert into levels_standards(level_id, standard_id) values (81.133,81);       

insert into levels(id,description) values (81.134,'');
insert into games_levels (level_id,game_id) values  (81.134,7);
insert into levels_standards(level_id, standard_id) values (81.134,81);       

insert into levels(id,description) values (81.135,'');
insert into games_levels (level_id,game_id) values  (81.135,7);
insert into levels_standards(level_id, standard_id) values (81.135,81);       

insert into levels(id,description) values (81.136,'');
insert into games_levels (level_id,game_id) values  (81.136,7);
insert into levels_standards(level_id, standard_id) values (81.136,81);       

insert into levels(id,description) values (81.137,'');
insert into games_levels (level_id,game_id) values  (81.137,7);
insert into levels_standards(level_id, standard_id) values (81.137,81);       

insert into levels(id,description) values (81.138,'');
insert into games_levels (level_id,game_id) values  (81.138,7);
insert into levels_standards(level_id, standard_id) values (81.138,81);       

insert into levels(id,description) values (81.139,'');
insert into games_levels (level_id,game_id) values  (81.139,7);
insert into levels_standards(level_id, standard_id) values (81.139,81);       

insert into levels(id,description) values (81.140,'');
insert into games_levels (level_id,game_id) values  (81.140,7);
insert into levels_standards(level_id, standard_id) values (81.140,81);       

insert into levels(id,description) values (81.141,'');
insert into games_levels (level_id,game_id) values  (81.141,7);
insert into levels_standards(level_id, standard_id) values (81.141,81);       

insert into levels(id,description) values (81.142,'');
insert into games_levels (level_id,game_id) values  (81.142,7);
insert into levels_standards(level_id, standard_id) values (81.142,81);       

insert into levels(id,description) values (81.143,'');
insert into games_levels (level_id,game_id) values  (81.143,7);
insert into levels_standards(level_id, standard_id) values (81.143,81);       

insert into levels(id,description) values (81.144,'');
insert into games_levels (level_id,game_id) values  (81.144,7);
insert into levels_standards(level_id, standard_id) values (81.144,81);       

insert into levels(id,description) values (81.145,'');
insert into games_levels (level_id,game_id) values  (81.145,7);
insert into levels_standards(level_id, standard_id) values (81.145,81);       

insert into levels(id,description) values (81.146,'');
insert into games_levels (level_id,game_id) values  (81.146,7);
insert into levels_standards(level_id, standard_id) values (81.146,81);       

insert into levels(id,description) values (81.147,'');
insert into games_levels (level_id,game_id) values  (81.147,7);
insert into levels_standards(level_id, standard_id) values (81.147,81);       

insert into levels(id,description) values (81.148,'');
insert into games_levels (level_id,game_id) values  (81.148,7);
insert into levels_standards(level_id, standard_id) values (81.148,81);       

insert into levels(id,description) values (81.149,'');
insert into games_levels (level_id,game_id) values  (81.149,7);
insert into levels_standards(level_id, standard_id) values (81.149,81);       

insert into levels(id,description) values (81.150,'');
insert into games_levels (level_id,game_id) values  (81.150,7);
insert into levels_standards(level_id, standard_id) values (81.150,81);       

insert into levels(id,description) values (81.151,'');
insert into games_levels (level_id,game_id) values  (81.151,7);
insert into levels_standards(level_id, standard_id) values (81.151,81);       

insert into levels(id,description) values (81.152,'');
insert into games_levels (level_id,game_id) values  (81.152,7);
insert into levels_standards(level_id, standard_id) values (81.152,81);       

insert into levels(id,description) values (81.153,'');
insert into games_levels (level_id,game_id) values  (81.153,7);
insert into levels_standards(level_id, standard_id) values (81.153,81);       

insert into levels(id,description) values (81.154,'');
insert into games_levels (level_id,game_id) values  (81.154,7);
insert into levels_standards(level_id, standard_id) values (81.154,81);       

insert into levels(id,description) values (81.155,'');
insert into games_levels (level_id,game_id) values  (81.155,7);
insert into levels_standards(level_id, standard_id) values (81.155,81);       

insert into levels(id,description) values (81.156,'');
insert into games_levels (level_id,game_id) values  (81.156,7);
insert into levels_standards(level_id, standard_id) values (81.156,81);       

insert into levels(id,description) values (81.157,'');
insert into games_levels (level_id,game_id) values  (81.157,7);
insert into levels_standards(level_id, standard_id) values (81.157,81);       

insert into levels(id,description) values (81.158,'');
insert into games_levels (level_id,game_id) values  (81.158,7);
insert into levels_standards(level_id, standard_id) values (81.158,81);       

insert into levels(id,description) values (81.159,'');
insert into games_levels (level_id,game_id) values  (81.159,7);
insert into levels_standards(level_id, standard_id) values (81.159,81);    

insert into levels(id,description) values (81.160,'');
insert into games_levels (level_id,game_id) values  (81.160,7);
insert into levels_standards(level_id, standard_id) values (81.160,81);       

insert into levels(id,description) values (81.161,'');
insert into games_levels (level_id,game_id) values  (81.161,7);
insert into levels_standards(level_id, standard_id) values (81.161,81);       

insert into levels(id,description) values (81.162,'');
insert into games_levels (level_id,game_id) values  (81.162,7);
insert into levels_standards(level_id, standard_id) values (81.162,81);       

insert into levels(id,description) values (81.163,'');
insert into games_levels (level_id,game_id) values  (81.163,7);
insert into levels_standards(level_id, standard_id) values (81.163,81);       

insert into levels(id,description) values (81.164,'');
insert into games_levels (level_id,game_id) values  (81.164,7);
insert into levels_standards(level_id, standard_id) values (81.164,81);       

insert into levels(id,description) values (81.165,'');
insert into games_levels (level_id,game_id) values  (81.165,7);
insert into levels_standards(level_id, standard_id) values (81.165,81);       

insert into levels(id,description) values (81.166,'');
insert into games_levels (level_id,game_id) values  (81.166,7);
insert into levels_standards(level_id, standard_id) values (81.166,81);       

insert into levels(id,description) values (81.167,'');
insert into games_levels (level_id,game_id) values  (81.167,7);
insert into levels_standards(level_id, standard_id) values (81.167,81);       

insert into levels(id,description) values (81.168,'');
insert into games_levels (level_id,game_id) values  (81.168,7);
insert into levels_standards(level_id, standard_id) values (81.168,81);       

insert into levels(id,description) values (81.169,'');
insert into games_levels (level_id,game_id) values  (81.169,7);
insert into levels_standards(level_id, standard_id) values (81.169,81);    

insert into levels(id,description) values (81.170,'');
insert into games_levels (level_id,game_id) values  (81.170,7);
insert into levels_standards(level_id, standard_id) values (81.170,81);       

insert into levels(id,description) values (81.171,'');
insert into games_levels (level_id,game_id) values  (81.171,7);
insert into levels_standards(level_id, standard_id) values (81.171,81);       

insert into levels(id,description) values (81.172,'');
insert into games_levels (level_id,game_id) values  (81.172,7);
insert into levels_standards(level_id, standard_id) values (81.172,81);       

insert into levels(id,description) values (81.173,'');
insert into games_levels (level_id,game_id) values  (81.173,7);
insert into levels_standards(level_id, standard_id) values (81.173,81);       

insert into levels(id,description) values (81.174,'');
insert into games_levels (level_id,game_id) values  (81.174,7);
insert into levels_standards(level_id, standard_id) values (81.174,81);       

insert into levels(id,description) values (81.175,'');
insert into games_levels (level_id,game_id) values  (81.175,7);
insert into levels_standards(level_id, standard_id) values (81.175,81);       

insert into levels(id,description) values (81.176,'');
insert into games_levels (level_id,game_id) values  (81.176,7);
insert into levels_standards(level_id, standard_id) values (81.176,81);       

insert into levels(id,description) values (81.177,'');
insert into games_levels (level_id,game_id) values  (81.177,7);
insert into levels_standards(level_id, standard_id) values (81.177,81);       

insert into levels(id,description) values (81.178,'');
insert into games_levels (level_id,game_id) values  (81.178,7);
insert into levels_standards(level_id, standard_id) values (81.178,81);       

insert into levels(id,description) values (81.179,'');
insert into games_levels (level_id,game_id) values  (81.179,7);
insert into levels_standards(level_id, standard_id) values (81.179,81);    

insert into levels(id,description) values (81.180,'');
insert into games_levels (level_id,game_id) values  (81.180,7);
insert into levels_standards(level_id, standard_id) values (81.180,81);       

insert into levels(id,description) values (81.181,'');
insert into games_levels (level_id,game_id) values  (81.181,7);
insert into levels_standards(level_id, standard_id) values (81.181,81);       

insert into levels(id,description) values (81.182,'');
insert into games_levels (level_id,game_id) values  (81.182,7);
insert into levels_standards(level_id, standard_id) values (81.182,81);       

insert into levels(id,description) values (81.183,'');
insert into games_levels (level_id,game_id) values  (81.183,7);
insert into levels_standards(level_id, standard_id) values (81.183,81);       

insert into levels(id,description) values (81.184,'');
insert into games_levels (level_id,game_id) values  (81.184,7);
insert into levels_standards(level_id, standard_id) values (81.184,81);       

insert into levels(id,description) values (81.185,'');
insert into games_levels (level_id,game_id) values  (81.185,7);
insert into levels_standards(level_id, standard_id) values (81.185,81);       

insert into levels(id,description) values (81.186,'');
insert into games_levels (level_id,game_id) values  (81.186,7);
insert into levels_standards(level_id, standard_id) values (81.186,81);       

insert into levels(id,description) values (81.187,'');
insert into games_levels (level_id,game_id) values  (81.187,7);
insert into levels_standards(level_id, standard_id) values (81.187,81);       

insert into levels(id,description) values (81.188,'');
insert into games_levels (level_id,game_id) values  (81.188,7);
insert into levels_standards(level_id, standard_id) values (81.188,81);       

insert into levels(id,description) values (81.189,'');
insert into games_levels (level_id,game_id) values  (81.189,7);
insert into levels_standards(level_id, standard_id) values (81.189,81);    

insert into levels(id,description) values (81.190,'');
insert into games_levels (level_id,game_id) values  (81.190,7);
insert into levels_standards(level_id, standard_id) values (81.190,81);       

insert into levels(id,description) values (81.191,'');
insert into games_levels (level_id,game_id) values  (81.191,7);
insert into levels_standards(level_id, standard_id) values (81.191,81);       

insert into levels(id,description) values (81.192,'');
insert into games_levels (level_id,game_id) values  (81.192,7);
insert into levels_standards(level_id, standard_id) values (81.192,81);       

insert into levels(id,description) values (81.193,'');
insert into games_levels (level_id,game_id) values  (81.193,7);
insert into levels_standards(level_id, standard_id) values (81.193,81);       

insert into levels(id,description) values (81.194,'');
insert into games_levels (level_id,game_id) values  (81.194,7);
insert into levels_standards(level_id, standard_id) values (81.194,81);       

insert into levels(id,description) values (81.195,'');
insert into games_levels (level_id,game_id) values  (81.195,7);
insert into levels_standards(level_id, standard_id) values (81.195,81);       

insert into levels(id,description) values (81.196,'');
insert into games_levels (level_id,game_id) values  (81.196,7);
insert into levels_standards(level_id, standard_id) values (81.196,81);       

insert into levels(id,description) values (81.197,'');
insert into games_levels (level_id,game_id) values  (81.197,7);
insert into levels_standards(level_id, standard_id) values (81.197,81);       

insert into levels(id,description) values (81.198,'');
insert into games_levels (level_id,game_id) values  (81.198,7);
insert into levels_standards(level_id, standard_id) values (81.198,81);       

insert into levels(id,description) values (81.199,'');
insert into games_levels (level_id,game_id) values  (81.199,7);
insert into levels_standards(level_id, standard_id) values (81.199,81);    

insert into levels(id,description) values (81.200,'');
insert into games_levels (level_id,game_id) values  (81.200,7);
insert into levels_standards(level_id, standard_id) values (81.200,81);       

insert into levels(id,description) values (81.201,'');
insert into games_levels (level_id,game_id) values  (81.201,7);
insert into levels_standards(level_id, standard_id) values (81.201,81);       

insert into levels(id,description) values (81.202,'');
insert into games_levels (level_id,game_id) values  (81.202,7);
insert into levels_standards(level_id, standard_id) values (81.202,81);       

insert into levels(id,description) values (81.203,'');
insert into games_levels (level_id,game_id) values  (81.203,7);
insert into levels_standards(level_id, standard_id) values (81.203,81);       

insert into levels(id,description) values (81.204,'');
insert into games_levels (level_id,game_id) values  (81.204,7);
insert into levels_standards(level_id, standard_id) values (81.204,81);       

insert into levels(id,description) values (81.205,'');
insert into games_levels (level_id,game_id) values  (81.205,7);
insert into levels_standards(level_id, standard_id) values (81.205,81);       

insert into levels(id,description) values (81.206,'');
insert into games_levels (level_id,game_id) values  (81.206,7);
insert into levels_standards(level_id, standard_id) values (81.206,81);       

insert into levels(id,description) values (81.207,'');
insert into games_levels (level_id,game_id) values  (81.207,7);
insert into levels_standards(level_id, standard_id) values (81.207,81);       

insert into levels(id,description) values (81.208,'');
insert into games_levels (level_id,game_id) values  (81.208,7);
insert into levels_standards(level_id, standard_id) values (81.208,81);       

insert into levels(id,description) values (81.209,'');
insert into games_levels (level_id,game_id) values  (81.209,7);
insert into levels_standards(level_id, standard_id) values (81.209,81);       

insert into levels(id,description) values (81.210,'');
insert into games_levels (level_id,game_id) values  (81.210,7);
insert into levels_standards(level_id, standard_id) values (81.210,81);       

insert into levels(id,description) values (81.211,'');
insert into games_levels (level_id,game_id) values  (81.211,7);
insert into levels_standards(level_id, standard_id) values (81.211,81);       

insert into levels(id,description) values (81.212,'');
insert into games_levels (level_id,game_id) values  (81.212,7);
insert into levels_standards(level_id, standard_id) values (81.212,81);       

insert into levels(id,description) values (81.213,'');
insert into games_levels (level_id,game_id) values  (81.213,7);
insert into levels_standards(level_id, standard_id) values (81.213,81);       

insert into levels(id,description) values (81.214,'');
insert into games_levels (level_id,game_id) values  (81.214,7);
insert into levels_standards(level_id, standard_id) values (81.214,81);       

insert into levels(id,description) values (81.215,'');
insert into games_levels (level_id,game_id) values  (81.215,7);
insert into levels_standards(level_id, standard_id) values (81.215,81);       


insert into levels(id,description) values (81.216,'');
insert into games_levels (level_id,game_id) values  (81.216,7);
insert into levels_standards(level_id, standard_id) values (81.216,81);       

insert into levels(id,description) values (81.217,'');
insert into games_levels (level_id,game_id) values  (81.217,7);
insert into levels_standards(level_id, standard_id) values (81.217,81);


----*****-----%%%%%%-----&&&&&&------######-------@@@@@ SKIP AHEAD SECTION FOR LEVELS
--(CONTINUED PASSWORDS).......

--PASSWORDS
--3 letter easy words
insert into passwords (password) values ('ahh'); 
insert into passwords (password) values ('abs'); 
insert into passwords (password) values ('ace'); 
insert into passwords (password) values ('add'); 
insert into passwords (password) values ('aft'); 
insert into passwords (password) values ('ape'); 
insert into passwords (password) values ('and'); 
insert into passwords (password) values ('aim'); 
insert into passwords (password) values ('aid'); 
insert into passwords (password) values ('air'); 
insert into passwords (password) values ('all'); 
insert into passwords (password) values ('amp'); 
insert into passwords (password) values ('ant'); 
insert into passwords (password) values ('app'); 
insert into passwords (password) values ('apt'); 
insert into passwords (password) values ('arc'); 
insert into passwords (password) values ('arf'); 
insert into passwords (password) values ('ark'); 
insert into passwords (password) values ('arm'); 
insert into passwords (password) values ('art'); 
insert into passwords (password) values ('ash'); 
insert into passwords (password) values ('ask'); 
insert into passwords (password) values ('ate'); 
insert into passwords (password) values ('ave'); 
insert into passwords (password) values ('awe'); 
insert into passwords (password) values ('axe'); 
insert into passwords (password) values ('aye'); 
insert into passwords (password) values ('ays'); 
/*
insert into passwords (password) values ('baa'); 
insert into passwords (password) values ('bad'); 
insert into passwords (password) values ('bag'); 
insert into passwords (password) values ('bam'); 
insert into passwords (password) values ('ban'); 
insert into passwords (password) values ('bap'); 
insert into passwords (password) values ('bar'); 
insert into passwords (password) values ('bat'); 
insert into passwords (password) values ('bay'); 
insert into passwords (password) values ('bed'); 
insert into passwords (password) values ('bee'); 
insert into passwords (password) values ('beg'); 
insert into passwords (password) values ('ben'); 
insert into passwords (password) values ('bet'); 
insert into passwords (password) values ('bib'); 
insert into passwords (password) values ('bid'); 
insert into passwords (password) values ('big'); 
insert into passwords (password) values ('bin'); 
insert into passwords (password) values ('bio'); 
insert into passwords (password) values ('bit'); 
insert into passwords (password) values ('biz'); 
insert into passwords (password) values ('boa'); 
insert into passwords (password) values ('bob'); 
insert into passwords (password) values ('bod'); 
insert into passwords (password) values ('bog'); 
insert into passwords (password) values ('boo'); 
insert into passwords (password) values ('bop'); 
insert into passwords (password) values ('bot'); 
insert into passwords (password) values ('bow'); 
insert into passwords (password) values ('box'); 
insert into passwords (password) values ('boy'); 
insert into passwords (password) values ('bro'); 
insert into passwords (password) values ('brr'); 
insert into passwords (password) values ('bub'); 
insert into passwords (password) values ('bud'); 
insert into passwords (password) values ('bug'); 
insert into passwords (password) values ('bum'); 
insert into passwords (password) values ('bun'); 
insert into passwords (password) values ('bur'); 
insert into passwords (password) values ('bus'); 
insert into passwords (password) values ('but'); 
insert into passwords (password) values ('buy'); 


insert into passwords (password) values ('cab'); 
insert into passwords (password) values ('cad'); 
insert into passwords (password) values ('cam'); 
insert into passwords (password) values ('can'); 
insert into passwords (password) values ('cap'); 
insert into passwords (password) values ('car'); 
insert into passwords (password) values ('cat'); 
insert into passwords (password) values ('caw'); 
insert into passwords (password) values ('cee'); 
insert into passwords (password) values ('cob'); 
insert into passwords (password) values ('cod'); 
insert into passwords (password) values ('cog'); 
insert into passwords (password) values ('col'); 
insert into passwords (password) values ('con'); 
insert into passwords (password) values ('coo'); 
insert into passwords (password) values ('cop'); 
insert into passwords (password) values ('cor'); 
insert into passwords (password) values ('cos'); 
insert into passwords (password) values ('cot'); 
insert into passwords (password) values ('cow'); 
insert into passwords (password) values ('coy'); 
insert into passwords (password) values ('coz'); 
insert into passwords (password) values ('cry'); 
insert into passwords (password) values ('cub'); 
insert into passwords (password) values ('cud'); 
insert into passwords (password) values ('cue'); 
insert into passwords (password) values ('cup'); 
insert into passwords (password) values ('cut'); 

insert into passwords (password) values ('dab'); 
insert into passwords (password) values ('dad'); 
insert into passwords (password) values ('dag'); 
insert into passwords (password) values ('dah'); 
insert into passwords (password) values ('dak'); 
insert into passwords (password) values ('dal'); 
insert into passwords (password) values ('dam'); 
insert into passwords (password) values ('dan'); 
insert into passwords (password) values ('dap'); 
insert into passwords (password) values ('daw'); 
insert into passwords (password) values ('day'); 
insert into passwords (password) values ('deb'); 
insert into passwords (password) values ('dee'); 
insert into passwords (password) values ('def'); 
insert into passwords (password) values ('del'); 
insert into passwords (password) values ('den'); 
insert into passwords (password) values ('dev'); 
insert into passwords (password) values ('dew'); 
insert into passwords (password) values ('dex'); 
insert into passwords (password) values ('dey'); 
insert into passwords (password) values ('dib'); 
insert into passwords (password) values ('did'); 
insert into passwords (password) values ('die'); 
insert into passwords (password) values ('dif'); 
insert into passwords (password) values ('dig'); 
insert into passwords (password) values ('dim'); 
insert into passwords (password) values ('din'); 
insert into passwords (password) values ('dip'); 
insert into passwords (password) values ('dis'); 
insert into passwords (password) values ('dit'); 
insert into passwords (password) values ('doc'); 
insert into passwords (password) values ('doe'); 
insert into passwords (password) values ('dog'); 
insert into passwords (password) values ('dol'); 
insert into passwords (password) values ('dom'); 
insert into passwords (password) values ('don'); 
insert into passwords (password) values ('dor'); 
insert into passwords (password) values ('dos'); 
insert into passwords (password) values ('dot'); 
insert into passwords (password) values ('dow'); 
insert into passwords (password) values ('dry'); 
insert into passwords (password) values ('dub'); 
insert into passwords (password) values ('dud'); 
insert into passwords (password) values ('due'); 
insert into passwords (password) values ('dug'); 
insert into passwords (password) values ('duh'); 
insert into passwords (password) values ('dun'); 
insert into passwords (password) values ('duo'); 
insert into passwords (password) values ('dup'); 
insert into passwords (password) values ('dye'); 

insert into passwords (password) values ('ear'); 
insert into passwords (password) values ('eat'); 
insert into passwords (password) values ('ebb'); 
insert into passwords (password) values ('eds'); 
insert into passwords (password) values ('eek'); 
insert into passwords (password) values ('eel'); 
insert into passwords (password) values ('egg'); 
insert into passwords (password) values ('ego'); 
insert into passwords (password) values ('eke'); 
insert into passwords (password) values ('eld'); 
insert into passwords (password) values ('elf'); 
insert into passwords (password) values ('elk'); 
insert into passwords (password) values ('ell'); 
insert into passwords (password) values ('elm'); 
insert into passwords (password) values ('end'); 
insert into passwords (password) values ('eon'); 
insert into passwords (password) values ('era'); 
insert into passwords (password) values ('ere'); 
insert into passwords (password) values ('err'); 
insert into passwords (password) values ('eve'); 
insert into passwords (password) values ('eye'); 

insert into passwords (password) values ('fab'); 
insert into passwords (password) values ('fad'); 
insert into passwords (password) values ('fan'); 
insert into passwords (password) values ('far'); 
insert into passwords (password) values ('fat'); 
insert into passwords (password) values ('fax'); 
insert into passwords (password) values ('fay'); 
insert into passwords (password) values ('fed'); 
insert into passwords (password) values ('fee'); 
insert into passwords (password) values ('fen'); 
insert into passwords (password) values ('fer'); 
insert into passwords (password) values ('fes'); 
insert into passwords (password) values ('fet'); 
insert into passwords (password) values ('few'); 
insert into passwords (password) values ('fey'); 
insert into passwords (password) values ('fez'); 
insert into passwords (password) values ('fib'); 
insert into passwords (password) values ('fid'); 
insert into passwords (password) values ('fie'); 
insert into passwords (password) values ('fig'); 
insert into passwords (password) values ('fin'); 
insert into passwords (password) values ('fir'); 
insert into passwords (password) values ('fit'); 
insert into passwords (password) values ('fix'); 
insert into passwords (password) values ('fiz'); 
insert into passwords (password) values ('flu'); 
insert into passwords (password) values ('fly'); 
insert into passwords (password) values ('fob'); 
insert into passwords (password) values ('foe'); 
insert into passwords (password) values ('fog'); 
insert into passwords (password) values ('foh'); 
insert into passwords (password) values ('fon'); 
insert into passwords (password) values ('fop'); 
insert into passwords (password) values ('for'); 
insert into passwords (password) values ('fox'); 
insert into passwords (password) values ('foy'); 
insert into passwords (password) values ('fro'); 
insert into passwords (password) values ('fry'); 
insert into passwords (password) values ('fub'); 
insert into passwords (password) values ('fud'); 
insert into passwords (password) values ('fun'); 
insert into passwords (password) values ('fur'); 

insert into passwords (password) values ('gab'); 
insert into passwords (password) values ('gad'); 
insert into passwords (password) values ('gag'); 
insert into passwords (password) values ('gal'); 
insert into passwords (password) values ('gam'); 
insert into passwords (password) values ('gan'); 
insert into passwords (password) values ('gap'); 
insert into passwords (password) values ('gar'); 
insert into passwords (password) values ('gas'); 
insert into passwords (password) values ('gat'); 
insert into passwords (password) values ('ged'); 
insert into passwords (password) values ('gee'); 
insert into passwords (password) values ('gel'); 
insert into passwords (password) values ('gem'); 
insert into passwords (password) values ('gen'); 
insert into passwords (password) values ('get'); 
insert into passwords (password) values ('gey'); 
insert into passwords (password) values ('gib'); 
insert into passwords (password) values ('gid'); 
insert into passwords (password) values ('gie'); 
insert into passwords (password) values ('gig'); 
insert into passwords (password) values ('gin'); 
insert into passwords (password) values ('gip'); 
insert into passwords (password) values ('git'); 
insert into passwords (password) values ('gnu'); 
insert into passwords (password) values ('goa'); 
insert into passwords (password) values ('gob'); 
insert into passwords (password) values ('god'); 
insert into passwords (password) values ('goo'); 
insert into passwords (password) values ('gor'); 
insert into passwords (password) values ('gos'); 
insert into passwords (password) values ('got'); 
insert into passwords (password) values ('gox'); 
insert into passwords (password) values ('goy'); 
insert into passwords (password) values ('gul'); 
insert into passwords (password) values ('gum'); 
insert into passwords (password) values ('gun'); 
insert into passwords (password) values ('gut'); 
insert into passwords (password) values ('guv'); 
insert into passwords (password) values ('guy'); 
insert into passwords (password) values ('gym'); 
insert into passwords (password) values ('gyp'); 

insert into passwords (password) values ('had'); 
insert into passwords (password) values ('hag'); 
insert into passwords (password) values ('hah'); 
insert into passwords (password) values ('ham'); 
insert into passwords (password) values ('hap'); 
insert into passwords (password) values ('has'); 
insert into passwords (password) values ('hat'); 
insert into passwords (password) values ('haw'); 
insert into passwords (password) values ('hay'); 
insert into passwords (password) values ('heh'); 
insert into passwords (password) values ('hem'); 
insert into passwords (password) values ('hen'); 
insert into passwords (password) values ('hep'); 
insert into passwords (password) values ('her'); 
insert into passwords (password) values ('hes'); 
insert into passwords (password) values ('hew'); 
insert into passwords (password) values ('hex'); 
insert into passwords (password) values ('hey'); 
insert into passwords (password) values ('hic'); 
insert into passwords (password) values ('hid'); 
insert into passwords (password) values ('hie'); 
insert into passwords (password) values ('him'); 
insert into passwords (password) values ('hin'); 
insert into passwords (password) values ('hip'); 
insert into passwords (password) values ('his'); 
insert into passwords (password) values ('hit'); 
insert into passwords (password) values ('hmm'); 
insert into passwords (password) values ('hob'); 
insert into passwords (password) values ('hod'); 
insert into passwords (password) values ('hoe'); 
insert into passwords (password) values ('hog'); 
insert into passwords (password) values ('hon'); 
insert into passwords (password) values ('hop'); 
insert into passwords (password) values ('hot'); 
insert into passwords (password) values ('how'); 
insert into passwords (password) values ('hoy'); 
insert into passwords (password) values ('hub'); 
insert into passwords (password) values ('hue'); 
insert into passwords (password) values ('hug'); 
insert into passwords (password) values ('huh'); 
insert into passwords (password) values ('hun'); 
insert into passwords (password) values ('hup'); 
insert into passwords (password) values ('hut'); 
insert into passwords (password) values ('hyp'); 

insert into passwords (password) values ('ice'); 
insert into passwords (password) values ('ich'); 
insert into passwords (password) values ('ick'); 
insert into passwords (password) values ('icy'); 
insert into passwords (password) values ('ids'); 
insert into passwords (password) values ('iff'); 
insert into passwords (password) values ('ifs'); 
insert into passwords (password) values ('igg'); 
insert into passwords (password) values ('ilk'); 
insert into passwords (password) values ('ill'); 
insert into passwords (password) values ('imp'); 
insert into passwords (password) values ('ink'); 
insert into passwords (password) values ('inn'); 
insert into passwords (password) values ('ins'); 
insert into passwords (password) values ('ion'); 
insert into passwords (password) values ('ire'); 
insert into passwords (password) values ('irk'); 
insert into passwords (password) values ('ism'); 
insert into passwords (password) values ('its'); 
insert into passwords (password) values ('ivy'); 

insert into passwords (password) values ('jab'); 
insert into passwords (password) values ('jag'); 
insert into passwords (password) values ('jam'); 
insert into passwords (password) values ('jar'); 
insert into passwords (password) values ('jaw'); 
insert into passwords (password) values ('jay'); 
insert into passwords (password) values ('jee'); 
insert into passwords (password) values ('jet'); 
insert into passwords (password) values ('jib'); 
insert into passwords (password) values ('jig'); 
insert into passwords (password) values ('jin'); 
insert into passwords (password) values ('job'); 
insert into passwords (password) values ('joe'); 
insert into passwords (password) values ('jog'); 
insert into passwords (password) values ('jot'); 
insert into passwords (password) values ('jow'); 
insert into passwords (password) values ('joy'); 
insert into passwords (password) values ('jug'); 
insert into passwords (password) values ('jun'); 
insert into passwords (password) values ('jus'); 
insert into passwords (password) values ('jut'); 

insert into passwords (password) values ('kab'); 
insert into passwords (password) values ('kae'); 
insert into passwords (password) values ('kaf'); 
insert into passwords (password) values ('kas'); 
insert into passwords (password) values ('kat'); 
insert into passwords (password) values ('kea'); 
insert into passwords (password) values ('keg'); 
insert into passwords (password) values ('ken'); 
insert into passwords (password) values ('kep'); 
insert into passwords (password) values ('kex'); 
insert into passwords (password) values ('key'); 
insert into passwords (password) values ('kid'); 
insert into passwords (password) values ('kin'); 
insert into passwords (password) values ('kip'); 
insert into passwords (password) values ('kis'); 
insert into passwords (password) values ('kit'); 
insert into passwords (password) values ('koa'); 
insert into passwords (password) values ('kob'); 
insert into passwords (password) values ('koi'); 
insert into passwords (password) values ('kop'); 
insert into passwords (password) values ('kor'); 
insert into passwords (password) values ('kos'); 
insert into passwords (password) values ('lab'); 
insert into passwords (password) values ('lad'); 
insert into passwords (password) values ('lag'); 
insert into passwords (password) values ('lam'); 
insert into passwords (password) values ('lap'); 
insert into passwords (password) values ('lar'); 
insert into passwords (password) values ('las'); 
insert into passwords (password) values ('lat'); 
insert into passwords (password) values ('lav'); 
insert into passwords (password) values ('law'); 
insert into passwords (password) values ('lax'); 
insert into passwords (password) values ('lay'); 
insert into passwords (password) values ('lea'); 
insert into passwords (password) values ('led'); 
insert into passwords (password) values ('lee'); 
insert into passwords (password) values ('leg'); 
insert into passwords (password) values ('lei'); 
insert into passwords (password) values ('lek'); 
insert into passwords (password) values ('let'); 
insert into passwords (password) values ('lex'); 
insert into passwords (password) values ('ley'); 
insert into passwords (password) values ('lib'); 
insert into passwords (password) values ('lid'); 
insert into passwords (password) values ('lie'); 
insert into passwords (password) values ('lin'); 
insert into passwords (password) values ('lip'); 
insert into passwords (password) values ('lit'); 
insert into passwords (password) values ('lob'); 
insert into passwords (password) values ('log'); 
insert into passwords (password) values ('loo'); 
insert into passwords (password) values ('lop'); 
insert into passwords (password) values ('lot'); 
insert into passwords (password) values ('low'); 
insert into passwords (password) values ('lox'); 
insert into passwords (password) values ('lug'); 
insert into passwords (password) values ('lum'); 
insert into passwords (password) values ('luv'); 
insert into passwords (password) values ('lux'); 
insert into passwords (password) values ('lye'); 

insert into passwords (password) values ('mac'); 
insert into passwords (password) values ('mad'); 
insert into passwords (password) values ('mae'); 
insert into passwords (password) values ('mag'); 
insert into passwords (password) values ('man'); 
insert into passwords (password) values ('map'); 
insert into passwords (password) values ('mar'); 
insert into passwords (password) values ('mas'); 
insert into passwords (password) values ('mat'); 
insert into passwords (password) values ('maw'); 
insert into passwords (password) values ('max'); 
insert into passwords (password) values ('may'); 
insert into passwords (password) values ('med'); 
insert into passwords (password) values ('mel'); 
insert into passwords (password) values ('men'); 
insert into passwords (password) values ('met'); 
insert into passwords (password) values ('mew'); 
insert into passwords (password) values ('mib'); 
insert into passwords (password) values ('mic'); 
insert into passwords (password) values ('mid'); 
insert into passwords (password) values ('mig'); 
insert into passwords (password) values ('mil'); 
insert into passwords (password) values ('mim'); 
insert into passwords (password) values ('mir'); 
insert into passwords (password) values ('mis'); 
insert into passwords (password) values ('mix'); 
insert into passwords (password) values ('moa'); 
insert into passwords (password) values ('mob'); 
insert into passwords (password) values ('moc'); 
insert into passwords (password) values ('mod'); 
insert into passwords (password) values ('mog'); 
insert into passwords (password) values ('mol'); 
insert into passwords (password) values ('mom'); 
insert into passwords (password) values ('mon'); 
insert into passwords (password) values ('moo'); 
insert into passwords (password) values ('mop'); 
insert into passwords (password) values ('mor'); 
insert into passwords (password) values ('mos'); 
insert into passwords (password) values ('mot'); 
insert into passwords (password) values ('mow'); 
insert into passwords (password) values ('mud'); 
insert into passwords (password) values ('mug'); 
insert into passwords (password) values ('mum'); 
insert into passwords (password) values ('mun'); 
insert into passwords (password) values ('mut'); 

insert into passwords (password) values ('nab'); 
insert into passwords (password) values ('nag'); 
insert into passwords (password) values ('nah'); 
insert into passwords (password) values ('nam'); 
insert into passwords (password) values ('nan'); 
insert into passwords (password) values ('nap'); 
insert into passwords (password) values ('naw'); 
insert into passwords (password) values ('nay'); 
insert into passwords (password) values ('neb'); 
insert into passwords (password) values ('nee'); 
insert into passwords (password) values ('neg'); 
insert into passwords (password) values ('net'); 
insert into passwords (password) values ('new'); 
insert into passwords (password) values ('nib'); 
insert into passwords (password) values ('nil'); 
insert into passwords (password) values ('nim'); 
insert into passwords (password) values ('nip'); 
insert into passwords (password) values ('nit'); 
insert into passwords (password) values ('nix'); 
insert into passwords (password) values ('nob'); 
insert into passwords (password) values ('nod'); 
insert into passwords (password) values ('nog'); 
insert into passwords (password) values ('nom'); 
insert into passwords (password) values ('noo'); 
insert into passwords (password) values ('nor'); 
insert into passwords (password) values ('nos'); 
insert into passwords (password) values ('not'); 
insert into passwords (password) values ('now'); 
insert into passwords (password) values ('nub'); 
insert into passwords (password) values ('nun'); 
insert into passwords (password) values ('nut'); 

insert into passwords (password) values ('oaf'); 
insert into passwords (password) values ('oak'); 
insert into passwords (password) values ('oar'); 
insert into passwords (password) values ('oat'); 
insert into passwords (password) values ('obe'); 
insert into passwords (password) values ('odd'); 
insert into passwords (password) values ('off'); 
insert into passwords (password) values ('oil'); 
insert into passwords (password) values ('old'); 
insert into passwords (password) values ('one'); 
insert into passwords (password) values ('ono'); 
insert into passwords (password) values ('opt'); 
insert into passwords (password) values ('orc'); 
insert into passwords (password) values ('ore'); 
insert into passwords (password) values ('our'); 
insert into passwords (password) values ('out'); 
insert into passwords (password) values ('owe'); 
insert into passwords (password) values ('owl'); 
insert into passwords (password) values ('own'); 
insert into passwords (password) values ('oxy'); 

insert into passwords (password) values ('pac'); 
insert into passwords (password) values ('pad'); 
insert into passwords (password) values ('pal'); 
insert into passwords (password) values ('pam'); 
insert into passwords (password) values ('pan'); 
insert into passwords (password) values ('pap'); 
insert into passwords (password) values ('par'); 
insert into passwords (password) values ('pas'); 
insert into passwords (password) values ('pat'); 
insert into passwords (password) values ('paw'); 
insert into passwords (password) values ('pax'); 
insert into passwords (password) values ('pay'); 
insert into passwords (password) values ('pec'); 
insert into passwords (password) values ('ped'); 
insert into passwords (password) values ('peg'); 
insert into passwords (password) values ('pen'); 
insert into passwords (password) values ('pep'); 
insert into passwords (password) values ('per'); 
insert into passwords (password) values ('pes'); 
insert into passwords (password) values ('pet'); 
insert into passwords (password) values ('pew'); 
insert into passwords (password) values ('pic'); 
insert into passwords (password) values ('pie'); 
insert into passwords (password) values ('pig'); 
insert into passwords (password) values ('pin'); 
insert into passwords (password) values ('pip'); 
insert into passwords (password) values ('pit'); 
insert into passwords (password) values ('ply'); 
insert into passwords (password) values ('pod'); 
insert into passwords (password) values ('pol'); 
insert into passwords (password) values ('pom'); 
insert into passwords (password) values ('pop'); 
insert into passwords (password) values ('pot'); 
insert into passwords (password) values ('pow'); 
insert into passwords (password) values ('pox'); 
insert into passwords (password) values ('pro'); 
insert into passwords (password) values ('pry'); 
insert into passwords (password) values ('pug'); 
insert into passwords (password) values ('pun'); 
insert into passwords (password) values ('pup'); 
insert into passwords (password) values ('pur'); 
insert into passwords (password) values ('put'); 

insert into passwords (password) values ('rad'); 
insert into passwords (password) values ('rag'); 
insert into passwords (password) values ('rah'); 
insert into passwords (password) values ('raj'); 
insert into passwords (password) values ('ram'); 
insert into passwords (password) values ('ran'); 
insert into passwords (password) values ('rap'); 
insert into passwords (password) values ('rat'); 
insert into passwords (password) values ('raw'); 
insert into passwords (password) values ('rax'); 
insert into passwords (password) values ('ray'); 
insert into passwords (password) values ('reb'); 
insert into passwords (password) values ('rec'); 
insert into passwords (password) values ('red'); 
insert into passwords (password) values ('ref'); 
insert into passwords (password) values ('reg'); 
insert into passwords (password) values ('rem'); 
insert into passwords (password) values ('rep'); 
insert into passwords (password) values ('res'); 
insert into passwords (password) values ('ret'); 
insert into passwords (password) values ('rev'); 
insert into passwords (password) values ('rex'); 
insert into passwords (password) values ('rib'); 
insert into passwords (password) values ('rid'); 
insert into passwords (password) values ('rif'); 
insert into passwords (password) values ('rig'); 
insert into passwords (password) values ('rim'); 
insert into passwords (password) values ('rin'); 
insert into passwords (password) values ('rip'); 
insert into passwords (password) values ('rob'); 
insert into passwords (password) values ('roc'); 
insert into passwords (password) values ('rod'); 
insert into passwords (password) values ('rom'); 
insert into passwords (password) values ('rot'); 
insert into passwords (password) values ('row'); 
insert into passwords (password) values ('rub'); 
insert into passwords (password) values ('rue'); 
insert into passwords (password) values ('rug'); 
insert into passwords (password) values ('run'); 
insert into passwords (password) values ('rut'); 
insert into passwords (password) values ('rye'); 

insert into passwords (password) values ('sab'); 
insert into passwords (password) values ('sac'); 
insert into passwords (password) values ('sad'); 
insert into passwords (password) values ('sag'); 
insert into passwords (password) values ('sal'); 
insert into passwords (password) values ('sap'); 
insert into passwords (password) values ('sat'); 
insert into passwords (password) values ('saw'); 
insert into passwords (password) values ('sax'); 
insert into passwords (password) values ('say'); 
insert into passwords (password) values ('sea'); 
insert into passwords (password) values ('sec'); 
insert into passwords (password) values ('see'); 
insert into passwords (password) values ('set'); 
insert into passwords (password) values ('sew'); 
insert into passwords (password) values ('she'); 
insert into passwords (password) values ('shy'); 
insert into passwords (password) values ('sib'); 
insert into passwords (password) values ('sic'); 
insert into passwords (password) values ('sim'); 
insert into passwords (password) values ('sin'); 
insert into passwords (password) values ('sip'); 
insert into passwords (password) values ('sir'); 
insert into passwords (password) values ('sis'); 
insert into passwords (password) values ('sit'); 
insert into passwords (password) values ('six'); 
insert into passwords (password) values ('ska'); 
insert into passwords (password) values ('ski'); 
insert into passwords (password) values ('sky'); 
insert into passwords (password) values ('sly'); 
insert into passwords (password) values ('sob'); 
insert into passwords (password) values ('sod'); 
insert into passwords (password) values ('sol'); 
insert into passwords (password) values ('son'); 
insert into passwords (password) values ('sop'); 
insert into passwords (password) values ('sos'); 
insert into passwords (password) values ('sow'); 
insert into passwords (password) values ('sox'); 
insert into passwords (password) values ('soy'); 
insert into passwords (password) values ('spa'); 
insert into passwords (password) values ('spy'); 
insert into passwords (password) values ('sub'); 
insert into passwords (password) values ('sue'); 
insert into passwords (password) values ('sum'); 
insert into passwords (password) values ('sun'); 
insert into passwords (password) values ('sup'); 
insert into passwords (password) values ('syn'); 
insert into passwords (password) values ('tab'); 
insert into passwords (password) values ('tad'); 
insert into passwords (password) values ('tag'); 
insert into passwords (password) values ('taj'); 
insert into passwords (password) values ('tam'); 
insert into passwords (password) values ('tan'); 
insert into passwords (password) values ('tao'); 
insert into passwords (password) values ('tap'); 
insert into passwords (password) values ('tar'); 
insert into passwords (password) values ('tat'); 
insert into passwords (password) values ('taw'); 
insert into passwords (password) values ('tax'); 
insert into passwords (password) values ('tea'); 
insert into passwords (password) values ('ted'); 
insert into passwords (password) values ('tee'); 
insert into passwords (password) values ('teg'); 
insert into passwords (password) values ('tel'); 
insert into passwords (password) values ('ten'); 
insert into passwords (password) values ('the'); 
insert into passwords (password) values ('thy'); 
insert into passwords (password) values ('tic'); 
insert into passwords (password) values ('tie'); 
insert into passwords (password) values ('til'); 
insert into passwords (password) values ('tin'); 
insert into passwords (password) values ('tip'); 
insert into passwords (password) values ('tis'); 
insert into passwords (password) values ('tod'); 
insert into passwords (password) values ('toe'); 
insert into passwords (password) values ('tog'); 
insert into passwords (password) values ('tom'); 
insert into passwords (password) values ('ton'); 
insert into passwords (password) values ('too'); 
insert into passwords (password) values ('top'); 
insert into passwords (password) values ('tor'); 
insert into passwords (password) values ('tot'); 
insert into passwords (password) values ('tow'); 
insert into passwords (password) values ('toy'); 
insert into passwords (password) values ('try'); 
insert into passwords (password) values ('tub'); 
insert into passwords (password) values ('tug'); 
insert into passwords (password) values ('tun'); 
insert into passwords (password) values ('tup'); 
insert into passwords (password) values ('tut'); 
insert into passwords (password) values ('tux'); 
insert into passwords (password) values ('two'); 
insert into passwords (password) values ('tye'); 
insert into passwords (password) values ('ugh'); 
insert into passwords (password) values ('uke'); 
insert into passwords (password) values ('ulu'); 
insert into passwords (password) values ('umm'); 
insert into passwords (password) values ('ump'); 
insert into passwords (password) values ('upo'); 
insert into passwords (password) values ('use'); 
insert into passwords (password) values ('vac'); 
insert into passwords (password) values ('van'); 
insert into passwords (password) values ('var'); 
insert into passwords (password) values ('vas'); 
insert into passwords (password) values ('vat'); 
insert into passwords (password) values ('veg'); 
insert into passwords (password) values ('vet'); 
insert into passwords (password) values ('vex'); 
insert into passwords (password) values ('via'); 
insert into passwords (password) values ('vid'); 
insert into passwords (password) values ('vie'); 
insert into passwords (password) values ('vim'); 
insert into passwords (password) values ('vis'); 
insert into passwords (password) values ('voe'); 
insert into passwords (password) values ('vow'); 
insert into passwords (password) values ('vox'); 
insert into passwords (password) values ('vug'); 
insert into passwords (password) values ('vum'); 
insert into passwords (password) values ('wab'); 
insert into passwords (password) values ('wad'); 
insert into passwords (password) values ('wag'); 
insert into passwords (password) values ('wan'); 
insert into passwords (password) values ('wap'); 
insert into passwords (password) values ('war'); 
insert into passwords (password) values ('was'); 
insert into passwords (password) values ('wat'); 
insert into passwords (password) values ('wax'); 
insert into passwords (password) values ('way'); 
insert into passwords (password) values ('web'); 
insert into passwords (password) values ('wed'); 
insert into passwords (password) values ('wee'); 
insert into passwords (password) values ('wet'); 
insert into passwords (password) values ('wha'); 
insert into passwords (password) values ('who'); 
insert into passwords (password) values ('why'); 
insert into passwords (password) values ('wig'); 
insert into passwords (password) values ('win'); 
insert into passwords (password) values ('wis'); 
insert into passwords (password) values ('wit'); 
insert into passwords (password) values ('wiz'); 
insert into passwords (password) values ('woe'); 
insert into passwords (password) values ('wok'); 
insert into passwords (password) values ('won'); 
insert into passwords (password) values ('woo'); 
insert into passwords (password) values ('wot'); 
insert into passwords (password) values ('wow'); 
insert into passwords (password) values ('wry'); 
insert into passwords (password) values ('wud'); 
insert into passwords (password) values ('wyn'); 
insert into passwords (password) values ('yag'); 
insert into passwords (password) values ('yah'); 
insert into passwords (password) values ('yak'); 
insert into passwords (password) values ('yam'); 
insert into passwords (password) values ('yap'); 
insert into passwords (password) values ('yar'); 
insert into passwords (password) values ('yaw'); 
insert into passwords (password) values ('yay'); 
insert into passwords (password) values ('yea'); 
insert into passwords (password) values ('yen'); 
insert into passwords (password) values ('yep'); 
insert into passwords (password) values ('yes'); 
insert into passwords (password) values ('yet'); 
insert into passwords (password) values ('yew'); 
insert into passwords (password) values ('yin'); 
insert into passwords (password) values ('yip'); 
insert into passwords (password) values ('yob'); 
insert into passwords (password) values ('yok'); 
insert into passwords (password) values ('yom'); 
insert into passwords (password) values ('yon'); 
insert into passwords (password) values ('you'); 
insert into passwords (password) values ('yow'); 
insert into passwords (password) values ('yuk'); 
insert into passwords (password) values ('yum'); 
insert into passwords (password) values ('yup'); 
insert into passwords (password) values ('zag'); 
insert into passwords (password) values ('zap'); 
insert into passwords (password) values ('zas'); 
insert into passwords (password) values ('zax'); 
insert into passwords (password) values ('zed'); 
insert into passwords (password) values ('zee'); 
insert into passwords (password) values ('zek'); 
insert into passwords (password) values ('zep'); 
insert into passwords (password) values ('zig'); 
insert into passwords (password) values ('zin'); 
insert into passwords (password) values ('zip'); 
insert into passwords (password) values ('zoa'); 
insert into passwords (password) values ('zuz'); 
insert into passwords (password) values ('zzz'); 
*/
--------------------REVOKE AND GRANT---------------------------------------
REVOKE ALL ON SCHEMA public FROM PUBLIC;
REVOKE ALL ON SCHEMA public FROM postgres;
GRANT ALL ON SCHEMA public TO postgres;
GRANT ALL ON SCHEMA public TO PUBLIC;

--
-- PostgreSQL database dump complete
--

--select * from clusters;
--select students.id,  users.username, users.password, users.first_name, users.last_name from students join users on students.id = users.id where users.school_id = 
--select clusters_domains.cluster_id from clusters_domains join clusters_grades on clusters_domains.cluster_id = clusters_grades.cluster_id where clusters_domains.domain_id = 1; 
--select clusters_domains.cluster_id from clusters_domains join clusters_grades on clusters_domains.cluster_id = clusters_grades.cluster_id where clusters_domains.domain_id = 2; 
--select standards_clusters.standard_id, standards_clusters.cluster_id  from standards_clusters, clusters_grades, clusters_domains where standards_clusters.cluster_id = clusters_grades.cluster_id and clusters_grades.cluster_id = clusters_domains.cluster_id  and clusters_grades.grade_id = 1 and clusters_domains.domain_id = 1; 


--select standards_clusters.standard_id, standards_clusters.cluster_id  from standards_clusters, clusters_grades, clusters_domains where standards_clusters.cluster_id = clusters_grades.cluster_id and clusters_grades.cluster_id = clusters_domains.cluster_id  and clusters_grades.grade_id = 1 and clusters_domains.domain_id = 1; 
--add standards_grades standards_domains.

--select standards.standard from clusters_domains join clusters_grades on clusters_domains.cluster_id = clusters_grades.cluster_id where clusters_grades.grade_id = 1; 

--select standards_clusters.standard_id, standards_clusters.cluster_id  from standards_clusters, clusters_grades, clusters_domains where standards_clusters.cluster_id = clusters_grades.cluster_id and clusters_grades.cluster_id = clusters_domains.cluster_id  and clusters_grades.grade_id = 1 and clusters_domains.domain_id = 1; 












