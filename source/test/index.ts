import { expect } from 'chai';
import { describe, it } from 'mocha';
import project from '..';

describe('project data', function () {
    it('project path', function () {
        expect(project.path).to.match(/project/);
    });
});