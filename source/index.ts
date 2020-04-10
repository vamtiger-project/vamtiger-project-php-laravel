import { resolve as resolvePath } from 'path';

const projectPath = resolvePath(
    __dirname,
    '../project'
);

export default {
    path: projectPath
};