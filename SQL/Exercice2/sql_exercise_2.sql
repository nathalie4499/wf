USE test;
SELECT agent_code, SUM(amount), count(amount)
	FROM orders
    WHERE amount >= 1000
    group by agent_code
    order by AVG(amount);
    
    
