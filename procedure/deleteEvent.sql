DROP PROCEDURE IF EXISTS deleteEvent;

DELIMITER $$

CREATE PROCEDURE deleteEvent (
    IN input_id_event INT
(10)

)
BEGIN
START TRANSACTION;

COMMIT;
END$$