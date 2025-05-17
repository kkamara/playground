-- This is useful for PATCH requests, where only some
-- items are provided for update.
UPDATE userTokens
SET authToken = COALESCE("1", authToken), createdAt = COALESCE(null, createdAt) 
WHERE id = 1;