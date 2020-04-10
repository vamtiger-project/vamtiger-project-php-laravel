"use strict";
Object.defineProperty(exports, "__esModule", { value: true });
const chai_1 = require("chai");
const mocha_1 = require("mocha");
const __1 = require("..");
mocha_1.describe('project data', function () {
    mocha_1.it('project path', function () {
        chai_1.expect(__1.default.path).to.match(/project/);
    });
});
//# sourceMappingURL=index.js.map