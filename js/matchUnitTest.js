var garbageType, canType;

garbageType = "mixed" ;
canType = "mixed";

TestCase("match() Test", {

		"test boolean value": function() {
			assertEquals(1, match());
		}
	}
);