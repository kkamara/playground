UPDATE userTokens
SET authToken = COALESCE("1", authToken), createdAt = COALESCE(null, createdAt) 
WHERE id = 1;