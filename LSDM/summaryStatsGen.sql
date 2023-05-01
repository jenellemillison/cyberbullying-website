INSERT INTO railway.SummaryStats (cyberbullying_category, count, cyberbullying_category_pct, topic)
SELECT 
  cyberbullying_category, 
  COUNT(*) AS 'count',
  COUNT(*) * 100.0 / (SELECT COUNT(*) FROM railway.Tweets WHERE topic = 'Politics' AND cyberbullying_category IS NOT NULL) AS 'cyberbullying_category_pct', 
  'Politics' AS topic
FROM railway.Tweets
WHERE topic = 'Politics'
AND cyberbullying_category IS NOT NULL
GROUP BY cyberbullying_category;

INSERT INTO railway.SummaryStats (cyberbullying_category, count, cyberbullying_category_pct, topic)
SELECT 
  cyberbullying_category, 
  COUNT(*) AS 'count',
  COUNT(*) * 100.0 / (SELECT COUNT(*) FROM railway.Tweets WHERE topic = 'Sexual Orientation' AND cyberbullying_category IS NOT NULL) AS 'cyberbullying_category_pct', 
  'Sexual Orientation' AS topic
FROM railway.Tweets
WHERE topic = 'Sexual Orientation'
AND cyberbullying_category IS NOT NULL
GROUP BY cyberbullying_category;

INSERT INTO railway.SummaryStats (cyberbullying_category, count, cyberbullying_category_pct, topic)
SELECT 
  cyberbullying_category, 
  COUNT(*) AS 'count',
  COUNT(*) * 100.0 / (SELECT COUNT(*) FROM railway.Tweets WHERE topic = 'Race/Ethnicity' AND cyberbullying_category IS NOT NULL) AS 'cyberbullying_category_pct', 
  'Race/Ethnicity' AS topic
FROM railway.Tweets
WHERE topic = 'Race/Ethnicity'
AND cyberbullying_category IS NOT NULL
GROUP BY cyberbullying_category;

INSERT INTO railway.SummaryStats (cyberbullying_category, count, cyberbullying_category_pct, topic)
SELECT 
  cyberbullying_category, 
  COUNT(*) AS 'count',
  COUNT(*) * 100.0 / (SELECT COUNT(*) FROM railway.Tweets WHERE topic = 'Movies' AND cyberbullying_category IS NOT NULL) AS 'cyberbullying_category_pct', 
  'Movies' AS topic
FROM railway.Tweets
WHERE topic = 'Movies'
AND cyberbullying_category IS NOT NULL
GROUP BY cyberbullying_category;

INSERT INTO railway.SummaryStats (cyberbullying_category, count, cyberbullying_category_pct, topic)
SELECT 
  cyberbullying_category, 
  COUNT(*) AS 'count',
  COUNT(*) * 100.0 / (SELECT COUNT(*) FROM railway.Tweets WHERE topic = 'Celebrities' AND cyberbullying_category IS NOT NULL) AS 'cyberbullying_category_pct', 
  'Celebrities' AS topic
FROM railway.Tweets
WHERE topic = 'Celebrities'
AND cyberbullying_category IS NOT NULL
GROUP BY cyberbullying_category;

INSERT INTO railway.SummaryStats (cyberbullying_category, count, cyberbullying_category_pct, topic)
SELECT 
  cyberbullying_category, 
  COUNT(*) AS 'count',
  COUNT(*) * 100.0 / (SELECT COUNT(*) FROM railway.Tweets WHERE topic = 'Sports' AND cyberbullying_category IS NOT NULL) AS 'cyberbullying_category_pct', 
  'Sports' AS topic
FROM railway.Tweets
WHERE topic = 'Sports'
AND cyberbullying_category IS NOT NULL
GROUP BY cyberbullying_category;
