var garbageNotDraggedYet;

garbageNotDraggedYet = 3;
returnGarbageType() = "food";

TestCase("dropGarbage() Test", {

		"Check number ofremaining garbages": function() {
			assertEquals(2, dropGarbage());
		}
	}
);